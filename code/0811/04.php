<?php
// 三元运算符
/*
条件语句 ? 是 : 否;
条件语句 ?: 赋值;
*/
$a = 30;
$b = 20;
if ($a>$b) {
	echo '$a>$b';
} else {
	echo '$a<=$b';
}

$bool = $a > $b ? true : false ;
var_dump($bool);

$id = isset($_GET['id']) ? $_GET['id'] : 0;
echo $id;
$id = isset($_GET['id']) ?: 0;
echo $id;

