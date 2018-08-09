<?php
/*
js中
var lst = [1,2,3,4]
var obj = {id:1, name='张三'}
eval

php中
json一种字符串
json_encode(编码), json_decode(解码)
*/

$data = [
	'0'=>['id'=>1, 'name'=>'张三', 'age'=>21, 'gender'=>'男'],
	'1'=>['id'=>2, 'name'=>'lisi', 'age'=>18, 'gender'=>'男'],
];

$json = json_encode($data, JSON_UNESCAPED_UNICODE);
// print_r($json);

$jsonStr = '{"id":{"id":1,"name":"张三","age":21,"gender":"男"},"name":{"id":2,"name":"lisi","age":18,"gender":"男"}}';

$jsonStr2 = '{{"id":1,"name":"张三","age":21,"gender":"男"},{"id":2,"name":"lisi","age":18,"gender":"男"}}';
$arr = json_decode($jsonStr2, true);
echo json_last_error();
echo json_last_error_msg();
var_dump($arr);


class Human {
	public $name = '张三';
	protected $age = 21;

	public function eat () {
		echo '吃饭';
	}
}

$obj = new Human;

print_r($obj);
echo json_encode($obj);

$str = '111';
var_dump($str);
$int = (float)$str;
var_dump($int);

// intval($str);
