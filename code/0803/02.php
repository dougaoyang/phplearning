<?php

/*
f(x) = 2x
f(x,y,z) = x^3 + y^2 + z
在数学中, 函数是输入与输出的关系
*/


function double2 ($x) {
	return 2 * $x;
}

echo double2(3);

/*
php
封装,可重用的特性
*/

// 函数的声明
/*
function 函数名 ([$arg1, $arg2, $arg3, ...]) {
	代码段
	return 值; //return可以有,也可以没有
}
*/


