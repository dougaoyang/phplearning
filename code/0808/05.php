<?php
// mysqli 预处理

$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
	echo '连接失败';exit;
}
// 设置连接数据库字符集
$conn->query('set names utf8');

$sql = "select id, username from users where id = ? and username = ?";
$stmt = $conn->prepare($sql);
// print_r($conn->error);

$stmt->bind_param('is', $pk, $name);

$pk = 1;
$name = 'zhangsan';
$stmt->execute();

$result = $stmt->get_result();
$rows = $result->fetch_all();
print_r($rows);

// 取出全部结果集
/*$stmt->store_result();
if ($stmt->num_rows) {
	$stmt->bind_result($id, $username);

	$rows = [];
	while ($stmt->fetch()) {
		$rows[] = ['id' => $id, 'username'=>$username];
		// echo $id . '~' . $username . '<br>';
	}
	print_r($rows);
} else {
	echo "没有数据";
}*/
