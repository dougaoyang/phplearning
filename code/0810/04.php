<?php
define('ROOT_PATH', __DIR__);

function my_autoload($className)
{
	$classPath = str_replace('\\', '/', $className);
	$classPath = ROOT_PATH . '/' . $classPath . 'Class.php';
	print_r($classPath);
	echo "<br>";

	if (!file_exists($classPath)) {
		$rules = include 'rules.php';
		if (isset($rules[$className])) {
			$realClassName = $rules[$className];
			my_autoload($realClassName);
		}
	} else {
		include $classPath;
	}
}

spl_autoload_register('my_autoload');

$cat1 = new \Foo\Bar\Cat1;
