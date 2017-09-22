<?php

/**
 * Created by PhpStorm.
 * User: TF
 * Date: 2017/8/30
 * Time: 16:42
 */
$mysqlCon = [
    //'configName' => 'configValue'

    'DB_NAME' => 'info',
    'DB_USER' => 'root',
    'DB_PASS' => 'mysql',
    'DB_IP'   => 'localhost'
];


$smartyCon = [
    'left_delimiter'  => '{',
    'right_delimiter' => '}',
    'template_dir'    => 'Project/View',
    'compile_dir'     => 'Project/TempCache',
    'cache_dir'       => 'Project/Cache'
];