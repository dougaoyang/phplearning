<?php

$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
	echo '连接失败';exit;
}
// 设置连接数据库字符集
$conn->query('set names utf8');

$sql = "insert into users (username, password, gender) values (?, ?, ?)";
$stmt = $conn->prepare($sql);

$stmt->bind_param('ssi', $name, $pwd, $gender);

$name = '刘备';
$pwd = '111111';
$gender = 1;
$stmt->execute();

$name = '关羽';
$pwd = '111111';
$gender = 1;
$stmt->execute();

$name = '张飞';
$pwd = '111111';
$gender = 1;
$stmt->execute();
