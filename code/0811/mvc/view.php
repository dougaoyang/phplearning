<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<h1>五虎上将</h1>
<table border="1">
	<tr>
		<th>ID</th>
		<th>姓名</th>
		<th>性别</th>
	</tr>
	<?php foreach ($newData as $key => $value): ?>
	<tr>
		<td><?php echo $value['id']; ?></td>
		<td><?php echo $value['username']; ?></td>
		<td><?php echo $value['gender']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
</body>
</html>
