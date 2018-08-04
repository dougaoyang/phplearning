<?php

$arr = [1,2,2,4,4];

// echo count($arr);

// var_dump(array_key_exists(2, $arr));

print_r($arr);
print_r(array_flip(array_flip($arr)));

print_r(array_unique($arr));

print_r(array_sum($arr));

var_dump(in_array(20, $arr));

array_push($arr, 5);
print_r($arr);

$arr[] = 6;
print_r($arr);

print_r(array_pop($arr));

print_r($arr);
print_r(array_shift($arr));
print_r($arr);

array_unshift($arr, 10);
print_r($arr);

print_r(array_reverse($arr));

