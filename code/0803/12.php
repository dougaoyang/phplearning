<?php
/*
字符串定义
1.单引号
2.双引号
3.定界符
*/

// $str1 = 'hello world';
// $str2 = "hello world";

/*
单 双 引号的区别
单引号就是纯粹的字符,原样输出  双引号可以解析变量
单引号的速度更快,没有解析过程
*/

$age = 18;

echo '我的年龄是$age<br>';
echo "我的年龄是$age<br>";


// 定界符, heredoc nowdoc
/*
$str = <<<定界符
大段文本
定界符;
*/

$str = <<<'str'
hello world
hello world
hello world
$age
str;

echo $str;

/*
定界符开始和结束的标识保持一致
结束的标识要顶格写,前面不能有空格,以分号结尾
*/

