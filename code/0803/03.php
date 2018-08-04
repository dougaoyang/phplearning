<?php

// 无参数函数
/*function foo () {
	echo '烧水';
	echo '放茶叶';
	echo '倒水';
}
foo();

echo '<br>';

// 单参数的函数
function double2 ($x) {
	return 2 * $x;
}

echo double2(3);

echo '<br>';

// 多参数的函数
// 3x+2y+z
function foo2 ($x, $y, $z) {
	return 3 * $x + 2 * $y + $z;
}
echo foo2(3,2,1);
echo '<br>';

// 参数带有默认值的函数
function foo3 ($x, $y, $z=1) {
	return 3 * $x + 2 * $y + $z;
}
echo foo3(3,2,10);
*/

function foo3 ($x, $y=2, $z=1) {
	return 3 * $x + 2 * $y + $z;
}

echo foo3(3,2,1,4,5,6);
// 如果传的参数个数大于函数的参数时, 只识别和函数参数对应的值



