<?php

print_r($_POST);

print_r($_FILES);

// 检查后缀
// 检查文件大小
// 移动文件

// '/uploads/th.jpg'
$fileData = $_FILES['file'];

// $dist = __DIR__ . '/uploads/'.$fileData['name'];
$dist = __DIR__ . '/uploads/123.jpg';
echo $dist;
$res = move_uploaded_file($fileData['tmp_name'], $dist);
if ($res) {
	echo "上传成功";
} else {
	echo "上传失败";
}

