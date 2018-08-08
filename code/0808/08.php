<?php

try {
	$dsn = 'mysql:host=localhost;dbname=test';
	$conn = new PDO($dsn, 'root', '');
	$conn->exec('set names utf8');

	// $sql = 'insert into users (username, password, gender) values (?, ?, ?)';
	$sql = 'insert into users (username, password, gender) values (:username, :password, :gender)';
	$stmt = $conn->prepare($sql);

	// $stmt->bindParam(':username', $username);
	// $stmt->bindParam(':password', $password);
	// $stmt->bindParam(':gender', $gender);

	// $username = '刘备';
	// $password = '111';
	// $gender = 1;
	
	// if ($stmt->execute()) {
	// 	echo '插入成功';
	// } else {
	// 	print_r($stmt->errorInfo());
	// }

	$stmt->execute([
		':username' => '关羽',
		':password' => '2222',
		':gender' => 1,
	]);

} catch (PDOException $e) {
	echo "操作失败", $e->getMessage();
}
