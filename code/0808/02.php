<?php
// 插入数据 mysqli


/*
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
	echo '连接失败';exit;
}
$conn->query('set names utf8');


$sql = "insert into users (username, password, gender) values ('李四', '111111', 1)";
// $res = $conn->query($sql);
if ($conn->query($sql)) {
	echo $conn->insert_id;
	echo '插入成功';
} else {	
	echo '插入失败';
}
*/

/*
$conn = mysqli_connect('localhost', 'root', '', 'test');
if (!$conn) {
	echo '连接失败', mysqli_connect_error();exit;
}

mysqli_query($conn, 'set names utf8');

$sql = "insert into users (username, password, gender) values ('张三', '222222', 2)";
// $res = mysqli_query($conn, $sql);
if (mysqli_query($conn, $sql)) {
	echo mysqli_insert_id($conn);
	echo '插入成功';
} else {
	echo '插入失败';
}
*/

// 插入数据pdo

try {
	$dsn = 'mysql:host=localhost;dbname=test';
	$conn = new PDO($dsn, 'root', '');

	$conn->exec('set names utf8');
	$sql = "insert into users (username, password, gender) values ('张三', '333333', 2)";
	$res = $conn->exec($sql);
	echo $conn->lastInsertId();
	echo '插入成功';
} catch (PDOException $e) {
	echo "操作失败", $e->getMessage();
}
