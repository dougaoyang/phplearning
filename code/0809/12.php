<?php
namespace Foo;

include '10.php';

class Human
{
	public $name = '李四';
}

$lisi = new Human; // Foo\Human

// 限定名称
$zhangsan = new Bar\Human; // Foo\Bar\Human

print_r($zhangsan);
