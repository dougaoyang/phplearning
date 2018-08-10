<?php
/*
匿名函数

js
function func () {}
var func = function () {}
$.get(url, function(){})
*/

// $msg = 'global message';
function func1() {
	// global $msg;
	echo $msg;
}
// func1();

$func2 = function($arg) {
	echo 'hello ' . $arg;
};
// var_dump($func2);
// $func2('world');

// use
$msg = 'global messa';
$func3 = function($arg) use ($msg) {
	// echo $msg;
	$msg = '11111';
	// echo "<br>";
	// echo $arg;
};

echo $msg;
$func3('aaa');
echo $msg;
