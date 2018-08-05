<?php

class human
{
	public $name;
	public $age;

	public function eat () {
		echo '我在吃饭';
	}

	public function gongzuo () {
		echo "打猎, 种田<br>";
	}
}

// human类扩展, 添加一个性别,和上网的功能
// 继承 extends

class newHuman extends human
{
	public $gender;

	public function internet () {
		echo '我会上网<br>';
	}

	public function gongzuo () {
		echo '会敲代码<br>';
	}
}

$lisi = new human;
$lisi->gongzuo();

$zhangsan = new newHuman;
// $zhangsan->eat();
$zhangsan->gongzuo();




