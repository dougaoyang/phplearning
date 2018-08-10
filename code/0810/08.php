<?php

function func1() {
	return function () {
		echo "我是匿名函数";
	};
}

// $res = func1();
// $res();

$foo = 0;

function func2() {
	$foo = 1;
	return function () use (&$foo) {
		echo $foo;
		$foo++;
	};
}

$res = func2();
for ($i=0; $i < 10; $i++) { 
	$res();
	echo "<br>";
}

echo $foo;
