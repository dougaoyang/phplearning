<?php
/*
use操作符
*/
namespace Foo\Bar4;
include '10.php';

// use Foo\Bar\Human;
// use Foo\Bar\Human as Zhang, PDO;
// use Foo\Bar\Human as Zhang;
// use Foo\Bar\Human;
// use Foo\Bar\Human1;
// use Foo\Bar\Human, Foo\Bar\Human1;
// use Foo\Bar; Bar是一个类
use Foo\Bar\{Human, Human1}; // php7才加入的
use PDO;
use function Foo\Bar\eat;


// $zhangsan = new \Foo\Bar\Human;
$zhangsan = new Human;
$zhangsan1 = new Human1;
print_r($zhangsan);
print_r($zhangsan1);

eat();