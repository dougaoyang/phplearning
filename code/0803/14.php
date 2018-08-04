<?php
/*
字符串长度函数
strlen
mb_strlen
*/

// $str = 'hello world';

// $str2 = '你好世界';
// echo strlen($str2);
// echo '<br>';

// echo mb_strlen($str2, 'utf-8');

// mbstring扩展提供的

/*
查找指定字符的函数
strpos
*/

$str = 'heLlo world';
var_dump(strrpos($str, 'l'));
// if (false !== strpos($str, 'he')) {
// 	echo '找到了';
// } else {
// 	echo '没找到';
// }

/* 
字符串替换函数
str_replace
*/

// hello fuck
// fuck ==> f**k

$str = 'hello fuck fuck fuck';
$count = 0;
echo str_replace('fuck', 'f**k', $str, $count);
echo '<br>';
echo '被替换了', $count, '次';


