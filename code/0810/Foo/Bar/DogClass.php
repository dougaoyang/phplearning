<?php
namespace Foo\Bar;

class Cat1
{
	public $name;

	public function __construct()
	{
		echo "dog Cat1被加载了";
	}
}

class Dog
{
	public $name;

	public function __construct()
	{
		echo "Dog被加载了";
	}
}
