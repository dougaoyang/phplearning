<?php
/*
面向对象
面向过程

写一个文章发布的功能
1.写一个表单,通过post数据提交到服务器
2.验证数据的合法性
3.连接数据库,把数据存储到数据库
4.提示成功/提示失败
把一个程序拆分很多小块,每一个步骤都在我们的控制下
*/

/*
项目经理 产品 设计 开发
*/

/*
张三是一位普通人,别人早晨向他打招呼,他会说"早上好”
但有一天他被车撞了,脑子受了一些伤,因此,别人早晨向他打招呼时,他有时会说"早上好",但有时会说"晚上好",甚至辱骂对方.
*/

/*
$iq = 100; // 80
function zhuang ($iq) {
	$iq = rand(80, 110);
	return $iq;
}
function zhaohu ($iq) {
	if ($iq<100) {
		echo "晚上好";
	} else {
		echo '早上好';
	}
}
zhaohu(zhuang($iq));
*/

class human
{
	public $iq = 100;

	public function zhaohu () {
		if ($this->iq >= 100) {
			echo "早上好<br>";
		} else {
			echo "晚上好<br>";
		}
	}
}

class car
{
	public function zhuang($who) {
		$who->iq = rand(80, 110);
	}
}

$zhangsan = new human;
$aotuo = new car;

$zhangsan->zhaohu();

$aotuo->zhuang($zhangsan);
echo '张三被撞了,智商变成了:' . $zhangsan->iq . '<br>';

$zhangsan->zhaohu();
