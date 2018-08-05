<?php
// 权限修饰符 public protected private
// 在子类中.只能继承 public 和 protected 修饰的属性或方法

class Foo
{
	public $a = 'aaaa';
	protected $b = 'bbbb';
	private $c = 'cccc';

	public function bar1 () {
		echo 'bar1 public';
	}

	protected function bar2 () {
		echo 'bar2 protected';
	}

	private function bar3 () {
		echo 'bar3 private';
	}
}

class NewFoo extends Foo
{
	public function getA () {
		return $this->a;
	}

	public function getB () {
		return $this->b;
	}

	public function getC () {
		return $this->c;
	}

	public function getBar1 () {
		$this->bar1();
	}

	public function getBar2 () {
		$this->bar2();
	}

	public function getBar3 () {
		$this->bar3();
	}
}

$foo = new NewFoo;
echo $foo->getC();

echo $foo->getBar1();
echo $foo->getBar2();
echo $foo->getBar3();

