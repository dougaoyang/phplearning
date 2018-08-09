<?php

$filePath = './test.txt';
$fh = fopen($filePath, 'r');


// substr
/*var_dump(feof($fh));
$str .= fread($fh, 100);
var_dump(feof($fh));
$str .= fread($fh, 100);
var_dump(feof($fh));
$str .= fread($fh, 100);
var_dump();*/

// $str = fread($fh, filesize($filePath));

// $str = '';
// while (!feof($fh)) {
// 	$str .= fread($fh, 100);
// }

// while (true) {
// 	$str .= fread($fh, 100);
// 	if (feof($fh)) {
// 		break;
// 	}
// }


$str = '';
while (!feof($fh)) {
	$str .= fgets($fh);
}
print_r(nl2br($str));

// $str = fgets($fh,2);
// print($str);

// $str = fgets($fh);
// print($str);

// print_r(nl2br($str));

fclose($fh);
