<?php
/*
抽象类和抽象方法

用abstract 关键词修饰,写在最前面
抽象方法没有方法体
一个类如果包含抽象方法,那么这个类必须是抽象类,抽象类内部可以不包含抽象方法
继承继承抽象类的类,必须实现父类里的所有抽象方法,或者定义为抽象类
抽象类不能实例化
抽象方法不能定义为私有(private)
*/

// 基类
abstract class Animal
{
	public $name;

	abstract public function eat ();

	abstract protected function jiao ();
}

abstract class Dog extends Animal
{
	// public function eat () {
	// 	echo "~~~~";
	// }

	public function jiao () {
		echo "汪汪汪";
	}
}

class YellowDog extends Dog
{
	public function eat () {
		echo "~~~~";
	}
}


// $dog = new Dog;

