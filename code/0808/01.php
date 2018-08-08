<?php

// phpinfo();

// var_dump(PDO::getAvailableDrivers());
/*
连接数据库
*/

/*
mysqli 面向对象
$conn = new mysqli("localhost", "username", "password", "dbname"); 
*/

// $conn = new mysqli('localhost', 'root', '', 'test');
// if ($conn->connect_error) {
// 	echo '连接失败';exit;
// }

/*
mysqli 面向过程
$conn = mysqli_connect("localhost", "username", "", "dbname"); 
*/

// $conn = mysqli_connect('localhost', 'root', '111', 'test');
// if (!$conn) {
// 	echo "报错信息:" . mysqli_connect_error();exit;
// }

/*
pdo连接
PDO::__construct ( string $dsn [, string $username [, string $password [, array $driver_options ]]] )
*/

try {
	$dsn = 'mysql:host=localhost;dbname=test';
	$conn = new PDO($dsn, 'root', '');
} catch (PDOException $e) {
	echo $e->getMessage();exit;
}

print_r($conn);
