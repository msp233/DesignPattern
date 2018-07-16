# PHP面向对象高级特性
## PSR-0规范
1. 命名空间必须与绝对路径一致
2. 类名首字母必须大写
3. 除入口文件外，其他“.php”必须只有一个类

## 开发符合PSR-0规范的基础框架
1. 全部使用命名空间
2. 所有PHP文件必须自动载入，不能有include/require
3. 单一入口

## SPL库的实用（PHP标准库）
1. SplStack,、SplQueue、SplHeap、SplFixedArray等数据结构类
2. ArrayIterator、AppendIterator、Countable、ArrayObject
3. SPL提供的函数

### 堆、栈、队列、数组
```
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
```

## PHP链式操作的实现
```
$db->where()->limit()->order();
```
`4-2`



































