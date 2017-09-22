<?php

/**
 * Created by PhpStorm.
 * User: TF
 * Date: 2017/8/29
 * Time: 20:42
 */
//入口文件
require_once("Project/Config/Config.php"); //引入配置
require_once("Project/fun/function.php");  //引入函数


$controller = !empty($_GET['c']) ? $_GET['c'] : 'index';
$method = !empty($_GET['m']) ? $_GET['m'] : 'index';

//引入第三方类库

$smarty = getOrg('smarty-3.1.30/libs/', 'Smarty', $smartyCon);
require_once("GD/ClassFile/Controller.class.php");
require_once("GD/ClassFile/Model.class.php");

imc($controller, $method);







