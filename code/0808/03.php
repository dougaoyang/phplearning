<?php
// 查询数据 mysqli

$sql = 'select id, username, gender from users';

/*
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
	echo '连接失败';exit;
}
// 设置连接数据库字符集
$conn->query('set names utf8');

$result = $conn->query($sql);

if ($result->num_rows) {
	// $allUsers = $result->fetch_all();
	while ($row = $result->fetch_assoc()) {
		echo $row['id'].'~'.$row['username'].'~'.$row['gender']."<br>";
	}
} else {
	echo "没有数据";
}
*/

/*
$conn = mysqli_connect('localhost', 'root', '', 'test');
if (!$conn) {
	echo '连接失败';exit;
}
// 设置连接数据库字符集
mysqli_query($conn, 'set names utf8');

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)) {
	// $allUsers = mysqli_fetch_all($result);
	// print_r($allUsers);
	while ($row = mysqli_fetch_assoc($result)) {
		echo $row['id'].'~'.$row['username'].'~'.$row['gender']."<br>";
	}
} else {
	echo "没有数据";
}
*/

// 查询数据 PDO
try {
	$dsn = 'mysql:host=localhost;dbname=test';
	$conn = new PDO($dsn, 'root', '');
	$conn->exec('set names utf8');

	$result = $conn->query($sql);
	// print_r($conn->errorInfo());
	if ($result->rowCount()) {
		// $allUsers = $result->fetchAll();

		while ($row = $result->fetch()) {
			echo $row['id'].'~'.$row['username'].'~'.$row['gender']."<br>";
		}
	} else {
		echo "没有数据";
	}
} catch (PDOException $e) {
	echo "操作失败", $e->getMessage();
}
