<?php
// 继承与重载(覆盖)
/*
再重写父类方法时,参数个数保持一致, 除了构造函数
重写的时候修饰符的权限越来越宽松,或者保持不变,不能越来越严格

只支持单继承
*/

class human
{
	public $name;
	public $age;

	public function __construct($arg1) {
		echo $arg1;
	}

	public function eat () {
		echo '我在吃饭';
	}

	protected function gongzuo ($arg1) {
		echo "打猎, 种田<br>";
	}
}

class newHuman extends human
{
	public $gender;

	public function __construct($arg1, $arg2) {
		$this->__construct($arg1);
	}

	public function internet () {
		echo '我会上网<br>';
	}

	public function gongzuo ($arg1) {
		echo '会敲代码<br>';
	}
}

$zhangsan = new newHuman('aaa', 'bbb');

// parent
