<?php
/**
 * Created by PhpStorm.
 * User: msp
 * Date: 2018/7/16
 * Time: 17:08
 */
define('BASE_DIR',__DIR__);

include BASE_DIR .'/Imooc/Loader.php';
spl_autoload_register('\\Imooc\\Loader::autoload');

Imooc\Object::test();

App\Controller\Home\Index::test();

//栈 先进后出
$stack = new SplStack();
$stack->push('data1');
$stack->push('data2');

echo '<hr/>';
echo $stack->pop();
echo '<br/>';
echo $stack->pop();
echo '<hr/>';

//队列 先进先出
$queue = new SplQueue();
$queue->enqueue('date1');
$queue->enqueue('data2');


echo $queue->dequeue();
echo '<br/>';
echo $queue->dequeue();
echo '<hr/>';

//堆
//最小堆
$heap = new SplMinHeap();
$heap->insert('data1<br/>');
$heap->insert('data2');
echo $heap->extract();
echo $heap->extract();
echo '<hr/>';

//固定尺寸的数组
$arr = new SplFixedArray(10);
$arr[0] = 123;
$arr[3] = 1234;
var_dump($arr);
echo '<hr/>';
