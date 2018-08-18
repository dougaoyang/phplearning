<?php

// 打开session会话
session_start();

$_SESSION['name'] = 'zhangsan';
$_SESSION['user'] = [
	'name' => 'liubei',
	'age' => 40,
];

echo session_id(), '<br>';

print_r($_SESSION);


