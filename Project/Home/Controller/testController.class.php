<?php

/**
 * Created by PhpStorm.
 * User: TF
 * Date: 2017/9/22
 * Time: 0:53
 */
use ClassFile\Controller;

class testController extends Controller
{
    public function ech()
    {
        echo 'this is ech';
        var_dump(G());
    }
}