<?php
// 变量名称是可以变的
// $a = 'hello';
// $hello = 'world';

// echo $$a;

// 函数名称也是可变的

function foo ($title, $arg2) {
	echo 'hello ', $title, $arg2, ' <br>';
}

// foo('world');

// $name = 'foo';
// $name();

// php内置函数 call_user_func, call_user_func_array

call_user_func('foo', 'hello', 'world');

$params = ['hello', 'world'];
call_user_func_array('foo', $params);


