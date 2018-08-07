<?php
/*
final 可以用来修饰类和类的方法,不能修饰属性
用来修饰类,该类无法被继承
修改方法,方法可以被继承, 不能重写
*/

class Foo
{

	// final public $a = 1;

	public function bar1 () {
		echo '我能被继承';
	}

	final public function bar () {
		echo 'hello';
	}
}

class NewFoo extends Foo
{
	public function bar1 () {
		echo '我重写了 bar1';
	}

	public function bar () {
		echo '我重写了 bar';
	}
}

$newFoo = new NewFoo();

$newFoo->bar1();
$newFoo->bar();
