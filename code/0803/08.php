<?php
/*
函数,变量,常量
如何检测这些是否定义?
*/

// 变量的检测
$a = 10;
$b = '0';
// 检测$a $b

// isset empty
/*
isset 是php的语法结构, 是否存在,存在就是TRUE
empty 是内置函数, 是不是为空,为空就返回TRUE,否则返回false

isset 是php的语法结构, empty 是内置函数
isset 检测变量是否存在,定义
empty 检测变量是否为空,未定义一定为空,定义过可能为空
在php中, 0, '0', '',null,[], 用empty校验都是返回true

*/

// unset 销毁变量
/*&
if (isset(var) && !empty(var)) {
	# code...
}

var_dump(isset($a)); // true
var_dump(isset($b)); // true

echo "<br>";

var_dump(empty($a)); // false
var_dump(empty($b)); // 
*/
/*
在php中, 0, '0', '',null,[], 用empty校验都是返回true
*/

// 常量的检测 defined
/*define('PI', 3.14);

var_dump(defined('PI'));
var_dump(defined('PI2'));

if (!defined('PI')) {
	define('PI', 3.14);
}*/

// 函数的检测, function_exists

var_dump(function_exists('foo'));

function foo () {
}




