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
    'template_dir'    => DIR_URL . "/Project/$block/View",
    'compile_dir'     => DIR_URL . "/Project/$block/TempCache",
    'cache_dir'       => DIR_URL . "/Project/$block/Cache"
];