<?php
namespace Foo\Bar;
echo __NAMESPACE__;
echo '<br>';

class Human
{
	public $name = '张三';
}

class Human1
{
	public $name = '张三11';
}


function eat () {
	echo 'Foo\Bar\eat';
}

// $zhangsan = new Human();
// print_r($zhangsan);
