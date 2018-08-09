<?php

$arr = [
	['id'=>1, 'name'=>'张三', 'age'=>21, 'gender'=>'男'],
	['id'=>10, 'name'=>'李四', 'age'=>18, 'gender'=>'男'],
	['id'=>132, 'name'=>'王五', 'age'=>26, 'gender'=>'男'],
	['id'=>44, 'name'=>'李雷', 'age'=>15, 'gender'=>'男'],
	['id'=>55, 'name'=>'韩梅梅', 'age'=>16, 'gender'=>'女'],
];

// foreach ($arr as $k => $v) {
// 	print_r($k);
// 	echo "~";
// 	print_r($v['name']);
// 	echo "\r\n";
// }

/*
$arr2 = [
	1=>['id'=>1, 'name'=>'张三', 'age'=>21, 'gender'=>'男'],
	10=>['id'=>2, 'name'=>'李四', 'age'=>18, 'gender'=>'男'],
	132=>['id'=>3, 'name'=>'王五', 'age'=>26, 'gender'=>'男'],
	44=>['id'=>4, 'name'=>'李雷', 'age'=>15, 'gender'=>'男'],
	55=>['id'=>5, 'name'=>'韩梅梅', 'age'=>16, 'gender'=>'女'],
];
*/

$arr2 = [];
foreach ($arr as $k => $v) {
	$arr2[$v['id']] = $v;
}
print_r($arr2);

/*
$arr3 = ['张三', '李四', '王五', '李雷', '韩梅梅'];
*/

$arr3 = [];
foreach ($arr as $k=>$v) {
	$arr3[] = $v['name'];
	// array_push($arr3, 2);
}
// print_r($arr3);
// print_r(array_column($arr, 'id'));

/*$tmp = [];
$tmp[] = 1;
$tmp[] = 2;
print_r($tmp);

$tmp2 = [];
$tmp2['name'] = 'zhang';
$tmp2['age'] = 21;
$tmp2[222] = 21;
print_r($tmp2);
*/