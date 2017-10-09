<?php
/**
 * Created by PhpStorm.
 * User: TF
 * Date: 2017/8/29
 * Time: 20:50
 */
//负责 控制器 和 方法的调用

function imc($block, $control, $method)
{
    $control = $control . 'Controller';
    try {
        $url = DIR_URL . '/Project/' . $block . '/Controller/' . $control . '.class.php';

        getErr('file_exists', $url, 'Controller is not found!!');
        require_once($url);

        getErr('class_exists', $control, 'Controller class is not found!');
        $c = new $control();

        getErr('method_exists', $c, $method, 'method is not found!!');
        $c->$method();

    } catch (Exception $e) {
        getErrInfo($e->getMessage());
    }

}

//负责模型的调用
function M($name)
{
    //将区块引入
    global $block;

    $m = null;
    $GLOBALS['tab'] = $name;

    //文件名称
    $name = $name . 'Model';
    $url = DIR_URL . "/Project/$block/Model/" . $name . '.class.php';

    try {
        getErr('file_exists', $url, 'modelFile is not found!!');
        require_once($url);

        getErr('class_exists', $name, 'model class is not found!');
        $m = new $name();

    } catch (Exception $e) {
        getErrInfo($e->getMessage());
    }

    return $m;
}

//负责调用

//负责视图的调用
//function imv($name)
//{
//    $name = $name . 'View';
//    require_once('Project/View/' . $name . '.class.php');
//    $m = new $name();
//    return $m;
//}

//负责第三方类库调用
function getOrg($url, $name, $con = [])
{

    try {
        $url = DIR_URL . '/Project/Org/' . $url . $name . '.class.php';

        getErr('file_exists', $url, 'OrgLib is not found!!');
        include_once($url);

        getErr('class_exists', $name, 'OrgLib class is not found!');
        $c = new $name();

        if (!empty($con)) {
            foreach ($con as $k => $v) {
                $c->$k = $v;
            }
        }

        return $c;

    } catch (Exception $e) {
        getErrInfo($e->getMessage());
    }
    return false;
}

function getErr()
{

    $args = func_get_args();

    try {
        if (!function_exists($args[0])) {
            throw new Exception('not is function');
        }
    } catch (Exception $e) {
        getErrInfo($e->getMessage());
    }

    switch (count($args)) {
        case 3:
            if (!$args[0]($args[1])) {
                throw new Exception($args[2]);
            };
            break;

        case 4:
            if (!$args[0]($args[1], $args[2])) {
                throw new Exception($args[3]);
            };
            break;

        default:
            break;
    }
}

function getErrInfo($info)
{
    die ("<div style='color: #a94442;background-color: #f2dede;border-color: #ebccd1;width:80%;margin: 0 auto;padding: 15px;margin-bottom: 20px;border: 1px solid transparent;border-radius: 4px;'>$info</div>");
}

//$_GET;
function G()
{
    $args = func_get_args();
    $len = count($args);
    if ($len == 1 || $len == 0) {
        return empty($args[0]) ? $_GET : (empty($_GET[$args[0]]) ? null : $_GET[$args[0]]);
    } elseif ($len == 2) {
        $_GET[$args[0]] = $args[1];
    }
    return false;
}

//$_POST;
function P()
{
    $args = func_get_args();
    $len = count($args);
    if ($len == 1 || $len == 0) {
        return empty($args[0]) ? $_POST : (empty($_POST[$args[0]]) ? null : $_POST[$args[0]]);
    } elseif ($len == 2) {
        $_POST[$args[0]] = $args[1];
    }
    return false;
}

//获取路径
function U($url = null, $var = null)
{
    //引入区块
    global $block;
    /*
     * [
     *      'id' => 1,
     *      'name' => 'tao'
     *
     *  ]
     *
     * /id/1/name/tao
     *
     * */
    if ($var && $url) {
        $arr = [];
        //name/tao/id/1
        foreach ($var as $k => $v) {
            $arr[] = $k;
            $arr[] = $v;
        }
        $var = join('/', $arr);
        return $url = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $block . '/' . $url . '/' . $var;
    }
    if ($url) {
        return $url = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $block . '/' . $url;
    }
}


//对 sql 语句进行 转义 防止SQL注入
function replaceSql($sql)
{
    $replace = [
        "'" => "\'",
        "\"" => "\\\"",
        "\\" => "\\\\"
    ];

    foreach ($replace as $k => $v) {
        $sql = str_replace($k, $v, $sql);
    }

    return $sql;
    // = str_replace("'", "\'", str_replace("\"", "\\\"", str_replace("\\", "\\\\", $sql)))
}


