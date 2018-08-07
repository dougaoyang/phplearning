<?php
/*
要计算一个多边形的周长
*/

/*
class Foo
{
	public function getLong ($a, $b, $c) {
		return $a + $b + $c;
	}

	public function getLong ($a, $b, $c, $d) {
		return $a + $b + $c + $d;
	}

	public function getLong ($a, $b, $c, $d, $e) {
		return $a + $b + $c + $d +$e;
	}
}
*/
/*
方法的多态
__call 调用未定义的方法
*/

class Foo
{
	public $bar = 'hello';

	public function hi () {
		echo $this->bar;
	}

	public function __call ($funcName, $args) {
		$len = count($args);
		if ($len == 3) {
			return $args[0] + $args[1] + $args[2];
		} else if ($len == 4) {
			return $args[0] + $args[1] + $args[2] + $args[3];
		} else {
			echo "还不支持其他形状";
		}
	}
}

$foo = new Foo;
echo $foo->getLong(1, 2, 3, 4, 5);
// $foo->hi();
