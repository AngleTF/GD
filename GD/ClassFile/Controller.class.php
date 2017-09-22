<?php

namespace ClassFile;

/**
 * Created by PhpStorm.
 * User: TF
 * Date: 2017/9/9
 * Time: 23:07
 */
class Controller
{
    private $smarty;

    public function __construct()
    {
        global $smarty;
        $this->smarty = $smarty;
    }

    public function display($point)
    {
        $this->smarty->display($point);
    }

    public function assign($arr = [])
    {
        if (!is_array($arr)) {
            getErrInfo('You need to pass in an array parameter');
        }
        foreach ($arr as $name => $var) {
            $this->smarty->assign($name, $var);
        }
    }

    public static function jsonReturn($data)
    {
        switch ($data) {
            case is_array($data):
                echo json_encode($data);
                break;
            case is_string($data):
                echo $data;
                break;
            default:
                echo null;
                break;
        }
    }

    //验证码
    public static function getDisturb($config = [])
    {
        header('content-type:image/png');
        $defaultCon = [
            'width' => 150,
            'height' => 60,
            'size' => 22,
            'x' => 0,
            'y' => 40,
            'len' => 4,
            'offset' => 30,
            'fontStyle' => 'c:/windows/fonts/msyh.ttf'
        ];
        $c = array_replace($config, $defaultCon);

        $imgBg = imagecreatetruecolor($c['width'], $c['height']);
        $brush = imagecolorallocate($imgBg, 255, 255, 255);
        imagefill($imgBg, 0, 0, $brush);

        $strList = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $Disturb = null;
        //制作验证码
        for ($i = 1; $i <= $c['len']; $i++) {
            $brush = imagecolorallocate($imgBg, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
            $char = $strList[mt_rand(0, 61)];
            imagettftext($imgBg, $c['size'], mt_rand(-60, 60), $c['x'] + $i * $c['offset'], $c['y'], $brush, $c['fontStyle'], $char);
            $Disturb .= $char;
        }
        $_SESSION['Disturb'] = $Disturb;
        imagejpeg($imgBg);
    }
}

