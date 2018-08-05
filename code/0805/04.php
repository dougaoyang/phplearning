<?php

// 可以操作同一类实例化的对象里面受保护的值
// 在类外部,不允许调用,在类内部是可以,不区分对象

/*
受保护的属性/方法 如何判断是否能够调用
判断调用发生的时机, 在类外部不行, 在类内部可以
*/


class Foo
{
	public $a = 1;
	protected $b = 2;
	private $c = 3;

	public function bar ($obj) {
		echo $obj->a, '<br>';
		echo $obj->b, '<br>';
		echo $obj->c, '<br>';
	}
}

$foo1 = new Foo;
$foo2 = new Foo;

// $foo1->b;
// $foo1->c;
$foo1->bar($foo2);

// echo $foo2->c;
