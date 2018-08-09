<?php

/*
include, require, include_once, require_once
都是包含文件的php语句
include和require是只包含文件,不检查文件是否包含过,区别,如果报错,include脚本继续执行,require中断脚本
include_once和require_once,包含文件并检测文件是否被包含过,确保文件只被包含过1次,如果报错include_onc脚本继续,require_once脚本中断

四个语句的返回值
如果没有return, 则包含成功返回 1,失败返回false
如果有return,则返回return的值
*/

// $a = 10;
// $b = 20;

// function hello () {
// 	echo "hello world";
// }

// hello();

// echo '01.php';

// return 'hello world';

return [
	'host' => 'localhost',
	'user' => 'root',
	'password' => '',
	'port' => 3306,
	'charset' => 'utf8'
];
