<?php
// 函数的执行权

/*
函数定义后不调用,函数无作用
当函数内所有语句执行完,或者执行到return,则交回执行权
*/

function foo () {
	return 0;
	echo 'hello wwworld';
	echo 'hello wwworld';
	echo 'hello wwworld';
	echo 'hello wwworld';
}

echo 'hi';

foo();

echo 'en';
