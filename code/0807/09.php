<?php

// 接口 interface
/*
interface关键字修饰
接口内的方法不能有方法体
不能有成员属性,类常量可以设置

接口可以继承接口, 使用extends关键字,可以继承多个接口
类实现接口,必须实现接口内的所有方法,或者定义为抽象类
类可以实现多个接口,但是必须实现接口内部的所有方法
尽量避免接口中有重名方法
*/

interface Inter1
{
	// public $a;
	const constant = 'hello';

	public function func1 ($a);
	public function func2 ();

	// public function func3 () {
	// 	echo '111';
	// }
}

interface Inter2
{
	public function func1 ($a, $b);
	public function func4 ();
}


// interface Inter3 extends Inter1, Inter2
// {
// }

class Foo implements Inter1, Inter2
{
	public function func1 ($a) {
	}

	public function func2 () {
	}

	public function func3 () {
	}

	public function func4 () {
	}
}

