<?php
// 连接数据库
$data = include 'model.php';

// 处理数据
$newData = [];
foreach ($data as $key => $value) {
	if ($value['gender'] == 1) {
		$gender = '男';
	} else if ($value['gender'] == 2) {
		$gender = '女';
	} else {
		$gender = '保密';
	}
	$newData[] = [
		'id' => $value['id'],
		'username' => $value['username'],
		'gender' => $gender,
	];
}

include 'view.php';
