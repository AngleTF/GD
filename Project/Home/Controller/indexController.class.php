<?php

use ClassFile\Controller;

/**
 * Created by PhpStorm.
 * User: TF
 * Date: 2017/8/29
 * Time: 22:24
 */
class indexController extends Controller
{
    //一个简单的跳转
    public function index()
    {
        //声明 assign 数组
        $assign = [
            'name' => 'GD',
            'as' => 'Good'
        ];
        //assign方法 只接受数组;
        $this->assign($assign);

        //传递到模板
        $this->display('index.html');
    }


    //操作模型
    public function db()
    {
        //实例化模型 并且模型继承基类 Model
        $model = M('test');

        //操作M对象 格式 obj -> 操作(del | add | up ) -> [where]
        //查询 obj -> que -> [where] -> 返回模式(find | select)
/*
        //add 函数只允许存放一维数组
        $add = [
            'name' => 'TAOLIFENG',
            'item' => '789'
        ];

        // return the influenced rows
        $addRows = $model->add($add);
        $this -> returnInfo('增加', $addRows);
*/



/*
        //delete one a id
        $del = [
            'id' => 27
        ];
        //delete more id
        $del = [
            'id' => '28,29,30'
        ];
        $delRows = $model -> del($del);
*/


        //where receive string or array
        //后期dle方法添加二参 对某些字段下的路径进行搜寻 并删除
/*
        $where = ['id'=>31];
        $delRows = $model -> del() -> where($where);
        $this -> returnInfo('删除', $delRows);
*/
/*
        $up = [
            'name' => 'iamtao',
            'item' => 'hell123o'
        ];

        $where = [
            'id' => 32
        ];
        //start $model::PATT_AND pattern this is default
        // where id = 33 and item = 123

        //start $model::PATT_OR pattern
        // where id = 33 or item = 123

        $upRows = $model -> up($up) -> where('id=33', $model::PATT_AND);

        $this -> returnInfo('修改', $upRows);

*/


/*
        $where = [
            'id' => 36
        ];
        $field = 'a.id,a.name,a.item';
        $as = 'a';
        //取一维数组
        $res = $model -> que($field, $as) -> where($where) -> find();
        //取二维数组
        $res1 = $model -> que() -> select();

        var_dump($res);
        var_dump($res1);
*/

/*
        //A join connection
        $join = 'left join news n on t.id = n.id';
        //more join connection
        $join = [
            'left join news n on n.id = t.id',
            'left join username u on u.id = t.id'
        ];
        $filed = 't.id,t.name tname,t.item,n.name nname,n.mess,u.user,u.pwd';
        $as = 't';

        $arr = $model -> que($filed, $as) -> join($join) -> order('id desc') -> select();

        var_dump($arr);
*/


    }
    //操作一些函数
    public function operFun()
    {
        $data = [
            'item' => '1',
            'value' => 'iam tao'
        ];

        //自动echo
        self::jsonReturn($data);

        //调用 G P 函数
        var_dump(G());

        //伪造一个POST 并且获取
        $_POST['tlf'] = 666;
        //也可以这样
        P('tlf123', 666);

        var_dump(P());
    }

    public function getImg()
    {
        self::getDisturb();
    }

    public function returnInfo($operation, $rows)
    {
        if ($rows) {
            echo $operation . '成功 影响行数为 ' . $rows;
        } else {
            echo $operation . '失败';
        }
    }
    public function clearBlock()
    {
        $name = 'admin';

    }
}

//图片上传操作
