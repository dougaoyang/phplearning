<?php

$arr2 = [
	'number' => 234,
	'name' => '张三',
	'height' => 174,
	'grade' => '高二',
	'home' => '南京'
];

// print_r($arr2);

/*
each返回一个包含四个单元的数组, 0,key是索引, 1,value是值
*/

/*print_r(each($arr2));
echo "\r\n";
print_r(each($arr2));
print_r(each($arr2));
print_r(each($arr2));
print_r(each($arr2));
var_dump(each($arr2));
*/


while (true) {
	$tmp = each($arr2);
	list($key, $value) = $tmp;
	if ($tmp) {
		echo $key, '~', $value, '<br>';
	} else{
		break;
	}
}

// list
// list($a, $b) = [1, 2];
// echo $a, '~', $b, '<br>';


list($a, ,$c) = [0=>1, 1=>2, 3=>3, 2=>4];
echo $a, '~', $c, '<br>';

/*
list从左到右对应关系,分别对应数组索引从0开始递增,不用管存不存在
赋值时,php5 从右到左赋值, php7从左到右赋值
*/

// [0=>1, 1=>2, 3=>3]

// $arr = [1, 2, 3];
// $arr[0]
// $arr[1]
// $arr[2]

// php5中,从右开始赋值
/*
$c = $arr[2]
$b = $arr[1]
$a = $arr[0]
*/

// php7中,从左开始赋值
/*
$a = $arr[0]
$b = $arr[1]
$c = $arr[2]
*/



