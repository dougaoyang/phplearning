<?php
// 函数的传参

/*function foo ($x, $y, $z) {
	$x = 6;
	return 3 * $x + 2 * $y + $z;
}

$a = 3;
$b = 2;
$c = 1;
echo '<br>';
echo foo(3, 2, 1);
echo '<br>';
echo $x;
*/

/*
形参,函数的参数
实参,实际传过去的参数,也就是传值


定义了 $x, $y, $z 三个全局变量
三个变量传给函数
在函数内部会产生和函数参数名一样的三个局部变量
局部变量在函数内部使用
*/

// $a = 10;
// $b = 20;
// $a = $b;
// $a = &$b;

function double2 (&$x) {
	$x = 20;
}

$a = 10;
echo $a, '<br>'; // 10
double2($a);
echo $a, '<br>'; // 20

