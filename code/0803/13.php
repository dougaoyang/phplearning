<?php

// $str = 'hello \'world\'';
// $str = "hello 'world'";


/*
当单引号定义的字符串内部包含单引号,可以使用反斜杠("\")来转义字符
或者用双引号来定义
*/

// hello \'' world
// $str = 'hello \\ \' \' world';


$str = "hello\r\nwor\tl\$d";
$str1 = 'hello\r\nwor\tl\$d';

echo $str;
echo '<br>';
echo $str1;
