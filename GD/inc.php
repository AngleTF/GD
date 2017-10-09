<?php
/**
 * Created by PhpStorm.
 * User: TF
 * Date: 2017/9/25
 * Time: 9:51
 */
session_start();
$controller = !empty($_GET['c']) ? $_GET['c'] : 'index';
$method = !empty($_GET['m']) ? $_GET['m'] : 'index';
$block = !empty($_GET['b']) ? $_GET['b'] : 'Home';

$inc = [
    'Project/Config/Config.php',
    'GD/Fun/function.php',
    'GD/ClassFile/Controller.class.php',
    'GD/ClassFile/Model.class.php'
];

foreach ($inc as $v) {
    require_once(DIR_URL . '/' . $v);
};



//引入第三方类库
$smarty = getOrg('smarty-3.1.30/libs/', 'Smarty', $smartyCon);

imc($block, $controller, $method);