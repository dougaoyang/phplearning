<?php
// 类的自动加载
namespace Foo\Bar;

class Cat
{
	public $name;

	public function __construct()
	{
		echo "我被加载了";
	}
}
