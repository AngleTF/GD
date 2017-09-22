<?php
namespace ClassFile;
/**
 * Created by PhpStorm.
 * User: TF
 * Date: 2017/9/9
 * Time: 23:44
 */

class Model
{
    //存放PDO句柄
    private $pdo;


    //存放执行的表名
    private $tab;


    //存放sql语句
    private $sql;


    //操作模式 del up que
    private $pattern;

    //模式
    const PATT_AND = 'and';
    const PATT_OR = 'or';


    //存放que 的 where 数组
    private $where = [];

    //存放PDOStatement
    private $stmt;

    //存放Up value;
    private $upDate;

    public function __construct()
    {
        //引入配置数组
        global $mysqlCon;
        $this->tab = $GLOBALS['tab'];
        //实例化PDO对象
        $pdo = null;
        try {
            $pdo = new \PDO('mysql:host=' . $mysqlCon['DB_IP'] . ';dbname=' . $mysqlCon['DB_NAME'], $mysqlCon['DB_USER'], $mysqlCon['DB_PASS']);
        } catch (\PDOException $e) {
            getErrInfo($e->getMessage());
        }
        $pdo -> query('set names utf8');
        $this->pdo = $pdo;
    }

    public function add($arr)
    {
        if (!is_array($arr)) {
            getErrInfo('add Function argument is not an array');
        }

        //操作k
        $keys = array_keys($arr);
        $k = join(',', $keys);

        //操作v
        $values = [];
        foreach ($keys as $val) {
            $values[] = ':' . $val;
        }
        $v = join(',', $values);

        //sql 语句
        $sql = 'insert into ' . $this->tab . "($k) values($v)";

        //提交
        return $this -> submit($sql, $arr);
    }

    public function del($arr = null)
    {
        if ($arr) {
            if (!is_array($arr)) {
                getErrInfo('del Function argument is not an array');
            }
            list($firstKey, $firstVal) = each($arr);

            $firstVal = explode(',', $firstVal);
            //获取对应的占位符
            $pre = $this -> forPre(count($firstVal));

            //sql 语句
            $sql = 'delete from ' . $this->tab . ' where ' . $firstKey . " in($pre) ";

            return $this -> submit($sql, $firstVal);
        } else {
            $this -> sql = 'delete from ' . $this->tab  ;
            $this -> pattern = 'del';
            return $this;
        }
    }

    public function up($arr)
    {
        // update test set name = 'tao123',item = '123' where id = 10;
        if (!is_array($arr)) {
            getErrInfo('up Function argument is not an array');
        }

        $list = [];
        foreach ($arr as $key => $value) {
            $list[] = $key . '=:' . $key;
        }
        $list = join(',', $list);

        $this -> sql = 'update ' . $this->tab . ' set ' . $list ;
        $this -> upDate = $arr;
        $this -> pattern = 'up';

        return $this;
    }

    public function que($field = '*', $as = null)
    {
        //select * from test where id = 1;
        if (!is_string($field)) {
            getErrInfo('field is not a string');
        }
        if ($as) {
            if (!is_string($as)) {
                getErrInfo('alias is not a string');
            }
            $this -> sql = "select $field from " . $this -> tab . " $as ";
        } else {
            $this -> sql = "select $field from " . $this -> tab ;
        }
        //放入一个模式
        $this -> pattern = 'que';
        return $this;
    }

    public function where($where = null, $pattern = 'and')
    {
        $sql = '';
        if (!$where) {
            return $this;
        }
        if (is_string($where)) {
            $this -> sql .= ' where ' . replaceSql($where);
            if ($this -> pattern === 'que') {
                return $this;
            } elseif ($this -> pattern === 'up') {
                return $this -> submit($this -> sql, $this -> upDate);
            }
            return $this -> submit($this -> sql);
        }
        //update test set name='taolifeng',item='888' where id = :id,
        if (is_array($where)) {
            $keys = array_keys($where);
            $values = [];
            foreach ($keys as $k => $v) {
                $values[] = $v . '=:' . $v;
            }
            $v = join(" $pattern ", $values);
            $this -> sql .= ' where ' . $v;

            if ($this -> pattern === 'que') {
                $this -> where = $where;
                return $this;
            } elseif ($this -> pattern === 'up') {
                $where = array_merge($this -> upDate, $where);
                $this -> upDate = null;
            }
            //del 提交点
            return $this -> submit($this -> sql, $where);
        }
        getErrInfo('where argument is not array or string');
        return false;
    }

    public function order($order)
    {
        //排序的字段1 desc||asc,[字段2 desc||asc]
        if (!is_string($order)) {
            getErrInfo('order is not a string');
        }
        $this -> sql .= ' order by ' . $order;
        return $this;
    }

    public function join($join = null)
    {
        if (!$join) {
            return $this;
        }
        //select * from news n left join test t on t.id = n.id ;
        if (is_string($join)) {
            $this -> sql .= $join;
        }
        if (is_array($join)) {
            $joinStr = '';
            foreach ($join as $v) {
                $joinStr .= $v . ' ';
            }
            $this -> sql .= $joinStr;
        }
        return $this;
    }

    public function find()
    {
        $this -> submit($this -> sql, $this -> where);
        $this -> stmt -> setFetchMode(\PDO::FETCH_ASSOC);
        return $this -> stmt -> fetch();
    }

    public function select()
    {
        $this -> submit($this -> sql, $this -> where);
        $this -> stmt -> setFetchMode(\PDO::FETCH_ASSOC);
        return $this -> stmt -> fetchAll();
    }

    private function submit($sql, $arr = null)
    {
        //清除sql 语句
        $this -> stmt = $this -> pdo -> prepare($sql);
        $this -> stmt -> execute($arr);
        return $this -> stmt -> rowCount();
    }

    final private function forPre($len = 1)
    {
        $str = '?';
        for ($i = 1; $i < $len; $i++) {
            $str .= ',?';
        }
        return $str;
    }

    //支持自定义
    public function getPdo()
    {
        return $this -> pdo;
    }


    //返回 sql 语句
    public function getSql()
    {
        return $this -> sql;
    }
}