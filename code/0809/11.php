<?php
namespace Foo\Bar1;

include '10.php';

class Human
{
	public $name = '李四';
}

// 非限定名称
$zhangsan = new Human(); // \Foo\Bar1\Human 这个类

// 目录结构
$path = 'test.txt'; // 当前目录寻找 相对路径 ./test.txt
$path = 'sub/1.txt'; // 当前目录寻找 相对路径
$path = __DIR__ . '/test.txt'; // 绝对路径


// 非限定名称
// 限定名称
// 完全限定名称
