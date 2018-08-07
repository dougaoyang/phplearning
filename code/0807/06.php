<?php
// 单例模式
/*
全局只有一个对象 购物车
整个系统共用一个
不允许外部实例化,类内部实例,实例全局只能有一个

私有的构造函数
私有的静态属性,用来存储实例
静态的共有方法,用来判断对象有没有实例化,没有就实例化并存储下来,有的就直接返回
防止克隆
防止继承
*/

final class Cart
{
	public $rand;

	private static $instance = null;

	public static function getInstance () {
		if (self::$instance) {
			return self::$instance;
		} else {
			self::$instance = new self;
			return self::$instance;
		}
		// if (!self::$instance) {
		// 	self::$instance = new self;
		// }
		// return self::$instance;
	}

	// 在类外部无法实例化
	protected function __construct () {
		$this->rand = rand(100, 999);
	}

	private function __clone () {}
}

$cart1 = Cart::getInstance();
print_r($cart1);
$cart2 = Cart::getInstance();
print_r($cart2);
$cart3 = Cart::getInstance();
print_r($cart3);

if ($cart1 === $cart2) {
	echo "相等11";
}

$cart4 = clone $cart1;

if ($cart1 === $cart4) {
	echo "相等";
}
