<?php
// 数组的循环遍历

$arr = ['中', '华', '人', '民'];

for ($i=0; $i < 4; $i++) { 
	echo $i , '~', $arr[$i], '<br>';
}

$arr2 = [
	'number' => 234,
	'name' => '张三',
	'height' => 174,
	'grade' => '高二',
	'home' => '南京'
];

// foreach
// 打印键和值
foreach ($arr as $key => $value) {
	echo "$key ~ $value <br>";
}

foreach ($arr as $value) {
	echo "$value <br>";
}

/*
这样语法不通过,不能只读取键
foreach ($arr as $key =>) {
}
*/


