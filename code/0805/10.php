<?php
// this parent self区别
/*
只能在类内部使用,在类外部不能使用
$this实例化对象的本身
parent指向父类, 调用时用::来连接
self执行类本身,用来调用静态属性或者方法
*/

class human
{
	public $name;
	public $age;
	public static $legs = 2;
	// const 

	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
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

	public function __construct($name, $age, $gender) {
		// 调用父类的构造函数
		parent::__construct($name, $age);
		$this->gender = $gender;
	}

	public function internet () {
		echo self::$legs;
		echo '我会上网<br>';
	}

	public function gongzuo ($arg1) {
		echo '会敲代码<br>';
	}
}

$zhangsan = new newHuman('张三', 18, '男');

print_r($zhangsan);

$zhangsan->internet();

// echo $zhangsan->legs;
echo human::$legs;
newHuman::$legs = 3;
echo newHuman::$legs;
