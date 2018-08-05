<?php
/*
面向对象
是把部分权限交给对象自身,我们关注对象之间的交互

类和对象
女娲造人

类是对一类事物抽象的概括性的描述
对象是对应类的一个实例
*/

/*
对象中有什么
身高,体重,会打招呼
属性 => 变量
功能 => 函数/方法
*/

// 对象的创建, 要创建一个类
/*
class 类名
{
	public $变量;

	public function 方法名 () {}
}

public 是修饰符, protected, private
*/

/*
class human
{
	public static $leg = 2;

	public $name = '张三';
	public $height = 170;

	public function greet () {
		echo '早上好';
	}
}

$zhangsan = new human;
print_r($zhangsan);

echo $zhangsan->name;
echo $zhangsan->height;
$zhangsan->greet();
*/

/*
实例化对象时传参数?
魔术方法 以两个下划线开头
__construct, 构造函数, 类被实例化 new 时候调用
__destruct,析构函数.对象被销毁时调用
*/

class human
{
	public static $leg = 2;

	public $name = '张三';
	public $height = 170;

	public function __construct ($name, $height) {
		$this->name = $name;
		$this->height = $height;

		echo '内部';
		print_r($this);
	}

	// public function __destruct () {
	// 	echo $this->name . '挂了';
	// }

	public function greet () {
		echo '早上好';
	}
}

// $zhangsan = new human('张三', 175);
// echo '外部';
// print_r($zhangsan);

// $lisi = new human('李四', 165);

// print_r($zhangsan);
// print_r($lisi);

// unset($zhangsan);

// php里面的显式销毁,和隐式销毁, php文件执行完,所有变量的都会被销毁

/*
$this 指向实例化的对象本身
它是一个虚拟化出来的变量
*/

/*
类属性的声明
属性的值可以是任意变量类型
*/

class human2
{
	public $height = 170;
	// public $height = 170 + 5; // php5不支持
	// public $height = 18>20; // php5不支持
	// public $height = rand(170, 180); //php5, php7不支持

	public function __construct () {
		$this->height += 5;
	}
}

$wangwu = new human2;
print_r($wangwu);

// 在php5 表达式, 函数的返回值, 算术运算结果 不支持
// 在php7 函数的返回值 不支持
