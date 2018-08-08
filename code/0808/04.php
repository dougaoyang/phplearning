<?php
// 更新数据 update pdo

/*
try {
	$dsn = 'mysql:host=localhost;dbname=test';
	$conn = new PDO($dsn, 'root', '');
	$conn->exec('set names utf8');

	$sql = 'update users set password='aaaa' where id=15';
	$num = $conn->exec($sql);

	echo "修改成功, 修改了".$num."条记录";
} catch (PDOException $e) {
	echo "操作失败", $e->getMessage();
}
*/

// 删除数据 delete

/*
try {
	$dsn = 'mysql:host=localhost;dbname=test';
	$conn = new PDO($dsn, 'root', '');
	$conn->exec('set names utf8');

	$sql = 'delete from users where id in (5, 11, 13, 14, 15)';
	$num = $conn->exec($sql);

	echo "删除成功, 删除了".$num."条记录";
} catch (PDOException $e) {
	echo "操作失败", $e->getMessage();
}
*/