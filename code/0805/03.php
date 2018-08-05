<?php
/*
对象的特点, 封装,继承,多态

封装
开放某些接口,来操作受保护的内部属性或方法

public修饰符, protected,private
*/

class human
{
	public $name;
	protected $money;

	public function __construct ($name, $money) {
		$this->name = $name;
		$this->money = $money;
	}

	public function borrow ($who, $money) {
		$who->money -= $money;
		$this->money += $money;
	}

}

$zhangsan = new human('张三', 10000);
$lisi = new human('李四', 8000);

// echo $zhangsan->name . '有:'. $zhangsan->money . '<br>';
// echo $lisi->name . '有:'. $lisi->money . '<br>';

echo "李四问张三借了5000<br>";

$lisi->borrow($zhangsan, 5000);

// $zhangsan->money -= 5000;
// $lisi->money += 5000;

// echo $zhangsan->name . '有:'. $zhangsan->money . '<br>';
// echo $lisi->name . '有:'. $lisi->money . '<br>';

/*
可以操作同一类实例化的对象里面受保护的值
*/
