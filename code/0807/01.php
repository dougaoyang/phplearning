<?php
/*
对象的三个特点 封装,继承,多态
多态
利用类的继承,还方法的覆盖重写

类型的多态
*/
/*
new human
NewHuman
newHuman
new_human
*/

class Animal
{
	public function jiao ($str) {
		$obj = new $str;
		$obj->jiao();
	}
}

class Cat
{
	public function jiao () {
		echo '喵喵喵<br>';
	}
}

class Dog
{
	public function jiao () {
		echo '汪汪汪<br>';
	}
}

class Sheep
{
	public function jiao () {
		echo '咩咩咩<br>';
	}
}

$animal = new Animal;
$animal->jiao('Cat');
$animal->jiao('Dog');
$animal->jiao('Sheep');

// $cat1 = new Cat;
// $cat1->jiao();

// $dog1 = new Dog;
// $dog1->jiao();

// $sheep1 = new Sheep;
// $sheep1->jiao();


