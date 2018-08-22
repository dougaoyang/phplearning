<?php
/*
1 2 3 4 5 6 7
limit 0,2  1 2 
limit 2,3  3 4 5

分页
100条记录存在数据库里面 articles
每页显示15条
第一页 1-15   select * from articles limit 0,15;
第二页 16-30  select * from articles limit 15,15;
select * from articles limit 30,15;
select * from articles limit 45,15;

1 0
2 15
3 30
4 45
n (n-1)*15

获取当前是第几页?
$_GET获取
*/
if (isset($_GET['page'])) {
	$page = (int)$_GET['page'];
} else {
	$page = 1;
}
if ($page < 1) {
	$page = 1;
}

// select count(*) from articles;
$total = 100;
$pageSize = 15;
$totalPage = ceil($total/$pageSize);

$offset = ($page-1) * $pageSize;
$sql = "select * from articles limit ".$offset.",".$pageSize;


echo "一共有".$total."条记录<br>";
echo "一共有".$totalPage."页<br>";
echo "当前是第".$page."页<br>";
echo $sql . "<br>";
