<?php
/*
__get __set 调用私有的,受保护属性
*/

class Foo
{
	public $a = 'aaaa';
	protected $b = 'bbbb';
	private $c = 'cccc';

	public function getC()
	{
		return $this->c;
	}

	public function setC($value)
	{
		return $this->c = $value;
	}

	public function __get ($name) {
		if ($name == 'c') {
			return $this->$name;
		} else {
			echo "只允许访问 c";
		}
	}

	public function __set ($name, $value) {
		print_r($name);
		echo "<br>";
		print_r($value);
		echo "<br>";
		$this->$name = $value;
	}
}

$foo = new Foo;

$foo->c = 'dddd';
// echo $foo->a;
// echo "<br>";
// echo $foo->c;
// echo "<br>";
// echo $foo->c;

