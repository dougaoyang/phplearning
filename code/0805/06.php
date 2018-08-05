<?php
// 继承

class human
{
	public $name;
	public $age;

	public function eat () {
		echo '我在吃饭';
	}
}

class newHuman
{
	public $name;
	public $age;
	public $gender;

	public function eat () {
		echo '我在吃饭<br>';
	}

	public function internet () {
		echo '我会上网<br>';
	}
}

