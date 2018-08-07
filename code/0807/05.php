<?php
/*
类的静态属性和静态方法
它是所有类的共有属性和方法,可以直接调用,不必实例化
静态方法里只能调用静态属性,不能调用一般的属性
*/

class Human
{
	public static $legs = 2;
	public $name = '张三';

	public static function run () {
		echo self::$legs;
		// echo $this->name;
		// echo '我在跑';
	}

	public function eat () {
		echo self::$legs;
		self::run();
	}
}

// echo Human::$legs;
Human::run();

// $zhangsan = new Human;
// $zhangsan->eat();

/*
类常量
可以是标量(字符串,整型,浮点型,bool,null,数组), 算术运算符,表达式,不支持函数的返回结果
*/
class Foo
{
	const constant = '我是常量';
	public $bar = 123;

	const operator = 20 / 10;
	const exp = 20 > 10;
	const arr = [1,2,3];
	// const obj = new Human;
	// const func = rand(10, 20); // 不支持
}

echo Foo::constant;
