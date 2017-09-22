<?php

/**
 * Created by PhpStorm.
 * User: TF
 * Date: 2017/8/29
 * Time: 20:40
 */

use ClassFile\Model;

class testModel extends Model
{
    public function index()
    {
        return '<style type="text/css">dir{padding:0;}</style>' . `dir c:`;
    }
}