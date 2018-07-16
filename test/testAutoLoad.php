<?php
/**
 * Created by PhpStorm.
 * User: msp
 * Date: 2018/7/16
 * Time: 16:49
 */

spl_autoload_register('autoload1');

Test3::test();
echo '<hr/>';
Test4::test();


function autoload1($class)
{
    require  __DIR__ . '/' . $class . '.php';
}