<?php
// z字符串截取 substr mb_substr

/*$str = 'helloworld';

echo $str , '<br>';

echo substr($str, 1, 5) , '<br>';

echo substr($str, -2) , '<br>';

var_dump(substr($str, 11));echo '<br>';

echo substr($str, -5, -2) , '<br>';
echo substr($str, -5, 3) , '<br>';

var_dump( substr($str, -5, -8) );

echo mb_substr('中华人民', 1) , '<br>';

// explode, implode

$str = 'hello|world';

echo $str , '<br>';
$arr = explode('|', $str);
print_r($arr);

$str2 = implode(' ', $arr);
echo $str2 , '<br>';
*/
// trim 去除字符串两边的空格
$str = '  hello  world   ';
var_dump($str);
echo '<br>';
$str2 =  trim( $str);
var_dump($str2);
echo '<br>';

// ltrim rtrim
var_dump(ltrim( $str));
echo '<br>';
var_dump(rtrim( $str));
echo '<br>';

// 获取文件的后缀名  111.txt.php  222.avi

$file = '111.txt.php';

// echo strrpos($file, '.');

echo substr($file, strrpos($file, '.')+1);
echo '<br>';
// echo strrchr($file, '.');
echo str_replace('.', '', strrchr($file, '.'));
echo '<br>';
echo substr(strrchr($file, '.'), 1);
echo '<br>';
$arr = explode('.', $file);
echo end($arr);
echo '<br>';
print_r(pathinfo($file));

