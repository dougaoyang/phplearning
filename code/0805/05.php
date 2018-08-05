<?php

class human
{
	public $name;
	protected $money;

	public function __construct ($name, $money) {
		$this->name = $name;
		$this->money = $money;
	}

	public function getMoney () {
		$money = $this->money - 2000;
		return $money;
	}

	public function borrow ($money) {
		$this->money += $money;
	}

	public function send ($money) {
		if ($money>3000) {
			echo "借的钱太多,不给<br>";
			return 0;
		} else {
			$this->money -= $money;
			return $money;
		}
	}
}

$zhangsan = new human('张三', 10000);
$lisi = new human('李四', 8000);

echo '张三有'. $zhangsan->getMoney() . '<br>';
echo '李四有'. $lisi->getMoney() . '<br>';

// 李四问张三去借钱5000
$lisi->borrow($zhangsan->send(1000));

echo '张三有'. $zhangsan->getMoney() . '<br>';
echo '李四有'. $lisi->getMoney() . '<br>';

