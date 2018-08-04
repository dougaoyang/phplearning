<?php
// 数组的调用,修改,销毁

/*$arr = ['中', '华' ,'人', '民'];

$arr2 = [
	'学号' => 234,
	'姓名' => '张三',
	'身高' => 174,
	'年级' => '高二',
	'家乡' => '南京'
];
*/
/*
数组的键可以是字符串,也可以是整型

关联数组: 键是字符串, 不规律的数字
索引数组: 从0开始递增的键 []
*/

$arr = ['中', '华' ,'人', '民'];
print_r($arr);
echo $arr[2];

$arr2 = [
	'name' => '张三',
	'age' => 21
];
print_r($arr2);
echo $arr2['age'];

$arr2['age'] = 24;
print_r($arr2);

$arr[2] = '人人';
print_r($arr);

// unset($arr);

// var_dump(isset($arr));

// $arr[2] = '';
$arr[2] = null;

unset($arr[2]);
print_r($arr);

// 清除数组中的一个单元 ,其他单元的键不会受到影响

// 数组的值 支持所有的数据类型
$arr = [
'字符串', 21, 21.5, false, null, [1]
];

var_dump($arr);


