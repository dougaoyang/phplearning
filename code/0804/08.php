<?php

$arr = [
	0=>1,
	1=>'hello',
	2=>[4, 5, 6]
];

print_r($arr);
echo $arr[1];

print_r($arr[2][1]);


$arr2 = [
	'name' => '张三',
	'age' => 21
];

print_r($arr2);

echo $arr2['name'];
echo "\r\n";


// define('name', 'sadsad');
echo $arr2['name'];
