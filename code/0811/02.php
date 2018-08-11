<?php
/*
mvc模式
MVC全名是Model View Controller
*/

// 连接数据库
// ......

$data = [
	['name'=>'关羽', 'age'=>40, 'wuqi'=>'青龙偃月刀'],
	['name'=>'张飞', 'age'=>38, 'wuqi'=>'丈八蛇矛'],
	['name'=>'赵云', 'age'=>30, 'wuqi'=>'龙胆亮银枪'],
	['name'=>'马超', 'age'=>25, 'wuqi'=>'虎头湛金枪'],
	['name'=>'黄忠', 'age'=>65, 'wuqi'=>'凤嘴刀'],
];

/*
foreach ($data as $key => $value) {
	echo $value['name'], "~", $value['wuqi'], "<br>";
}

foreach ($data as $key => $value):
	echo $value['name'], "~", $value['wuqi'], "<br>";
endforeach;

if (condition) {
}
if ():
endif;
*/
?>
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
		<th>姓名</th>
		<th>年龄</th>
		<th>武器</th>
	</tr>
	<?php 
		foreach ($data as $key => $value):
	?>		
	<tr>
		<td><?php echo $value['name']; ?></td>
		<td><?php echo $value['age']; ?></td>
		<td><?php echo $value['wuqi']; ?></td>
	</tr>
	<?php
		endforeach;
	?>
</table>
</body>
</html>
