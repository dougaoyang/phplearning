<?php
/*
spl_autoload_register函数
*/

define('ROOT_PATH', __DIR__);

// include './Foo/Bar/CatClass.php';
// include './Foo/Bar/DogClass.php';

function my_autoload($className) {
	$classPath = str_replace('\\', '/', $className);
	$classPath = './' . $classPath . 'Class.php';
	print_r($classPath);

	include $classPath;
}

spl_autoload_register('my_autoload');

$cat1 = new \Foo\Bar\Cat;
$dog1 = new \Foo\Bar\Dog;

