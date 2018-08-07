<?php

class Foo
{
	public $bar;

	public function __construct ($bar) {
		$this->bar = $bar;
	}

	public function __clone () {
		echo "我被克隆了";
	}
}

$foo1 = new Foo(1);
// $foo2 = new Foo(2);
// echo $foo2->bar; // 2

// $foo3 = $foo1;
// // $foo3 = $foo1;
// $foo3->bar = 3;

// echo $foo3->bar; // 3
// echo $foo1->bar; // 3

// 克隆 clone
$foo4 = clone $foo1;
$foo4->bar = 4;

echo $foo4->bar; // 4
echo $foo1->bar; // 1


// if ($foo1 == $foo4) {
// 	echo '相等';
// } else {
// 	echo '不相等';
// }


// $a = 1;
// $b = &$a;

// echo $a ,'~', $b, '<br>';
// $b = 10;
// echo $a ,'~', $b, '<br>';
