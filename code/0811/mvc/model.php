<?php

try {
	$dsn = 'mysql:host=localhost;dbname=test';
	$conn = new PDO($dsn, 'root', '');

	$conn->exec('set names utf8');

	$sql = 'select * from users';
	$result = $conn->query($sql);

	if ($result->rowCount()) {
		return $result->fetchAll();
	} else {
		echo "没有数据";exit;
	}
} catch (PDOException $e) {
	echo $e->getMessage();exit;
}
