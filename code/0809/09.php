<?php
/*
命名空间
命名空间是一种封装事物的方法
1.解决php内部 类/函数/常量 重名问题
2.将标识符用一个别名写，提高代码可读性
namespace
.../1/1.txt
.../2/1.txt
*/

// 一个文件里面定义多个命名空间，建议用大括号包起来
namespace name1\sub {

	const CONNECT_OK = 1;

	function foo(){}

	class Human
	{
	}

}

namespace name2 {
	const CONNECT_OK = 2;

	function foo(){}

	class Human
	{
	}
}

