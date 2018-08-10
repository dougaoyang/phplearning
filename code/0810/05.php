<?php

spl_autoload_register(function ($className) {
	$rules = include 'rules2.php';
	if (isset($rules[$className])) {
		$classPath = $rules[$className];
		if (!file_exists($classPath)) {
			exit($classPath . '文件不存在');
		}
		include $classPath;
	} else {
		exit($className . '类不存在');
	}
});


$cat1 = new \Foo\Bar\Cat;
$dog1 = new \Foo\Bar\Dog;
