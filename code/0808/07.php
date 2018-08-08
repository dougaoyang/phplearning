<?php

// try {
// 	$dsn = 'mysql:host=localhost;dbname=test';
// 	$conn = new PDO($dsn, 'root', '');
// 	$conn->exec('set names utf8');

// 	$sql = 'select * from users where id = ? and username = ?';
// 	$stmt = $conn->prepare($sql);

// 	$stmt->bindParam(1, $id);
// 	$stmt->bindParam(2, $username);

// 	$id = 1;
// 	$username = 'zhangsan';
// 	$stmt->execute();
	
// 	// $stmt->execute([1, 'zhangsan']);

// 	$res = $stmt->fetchAll();
// 	print_r($res);
// } catch (PDOException $e) {
// 	echo "操作失败", $e->getMessage();
// }


try {
	$dsn = 'mysql:host=localhost;dbname=test';
	$conn = new PDO($dsn, 'root', '');
	$conn->exec('set names utf8');

	$sql = 'select * from users where id = :id and username = :username';
	$stmt = $conn->prepare($sql);

	// $stmt->bindParam(':id', $id);
	// $stmt->bindParam(':username', $username);

	// $id = 1;
	// $username = 'zhangsan';
	// $stmt->execute();
	
	$stmt->execute([
		':username' => 'zhangsan',
		':id' => 1,
	]);

	$res = $stmt->fetchAll();
	print_r($res);
} catch (PDOException $e) {
	echo "操作失败", $e->getMessage();
}


