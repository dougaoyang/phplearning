<?php

// 函数内部的变量作用域

$a = 1;
$b = 2;

function foo ($x, $y) {
	global $a;

	$a = 10;
	$b = 20;

	return $a + $x + $b + $y;
}

echo $a, '~', $b, '<br>';
foo($a, $b);
echo $a, '~', $b, '<br>';

// $x, $y $a $b
// 函数内部的变量, 形参,和内部自己定义

// 函数内部改变全局变量 global


