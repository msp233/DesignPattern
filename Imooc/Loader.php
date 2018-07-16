<?php
/**
 * Created by PhpStorm.
 * User: msp
 * Date: 2018/7/16
 * Time: 17:27
 */
namespace Imooc;

class Loader
{
    static function autoload($class)
    {
        //var_dump($class);
        $file = BASE_DIR .'/' .str_replace('\\','/',$class) . '.php';
        require $file;
    }
}