<?php
/*
动态的变量 $$str
动态函数名 $$func()
动态类名 $$class()

动态命名空间
必须使用完全限定名称（包括命名空间前缀的类名称）。注意因为在动态的类名称、函数名称或常量名称中，限定名称和完全限定名称没有区别，因此其前导的反斜杠是不必要的。 

字符串类型的命名空间,就相当于绝对路径,不管最前面有没有 \
*/
namespace Foo\Bar3;
include '10.php';

echo __NAMESPACE__;
echo '<br>';

echo __FILE__;
echo '<br>';

echo __DIR__;
echo '<br>';

// $zhangsan = new \Foo\Bar\Human;
// $zhangsan = new Foo\Bar\Human; \\ Foo\Bar3\Foo\Bar\Human
// print_r($zhangsan);

$str = 'Foo\Bar\Human'; // \Foo\Bar\Human
// $str = 'Bar\Human'; // \Bar\Human
// $str = 'Human'; // \Human
// $str = '\\'.$str;
$zhangsan = new $str;
print_r($zhangsan);


