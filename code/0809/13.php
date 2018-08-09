<?php
namespace Foo\Bar2;

include '10.php';
include '14.php';

class Human
{
	public $name = '李四';
}

$lisi = new Human; // Foo\Human
// $zhangsan = new Foo\Bar1\Human; // Foo\Bar2\Foo\Bar1\Human 不存在

// 完全限定名称
$zhangsan = new \Foo\Bar\Human;
print_r($zhangsan);

// function eat () {
// 	echo 'Foo\Bar2\eat';
// }

// $car1 = new Car; // Foo\Bar2\Car
$car1 = new \Car;
print_r($car1);

echo "<br>";
\Foo\Bar\eat();
echo "<br>";
\eat();
echo "<br>";
eat(); // 如果当前命名空间有则调用当前命名空间函数,没有则调用全局最外层的函数

