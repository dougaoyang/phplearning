<?php

// include './classes/Cat.php';

spl_autoload_register(function ($className) {
	$tmp = explode('\\', $className);
	$class = end($tmp);

	$classPath = './classes/' . $class . '.php';

	include $classPath;
});

new \Foo\Bar\Cat;
