<?php

print_r($_COOKIE);
if (isset($_COOKIE['name']) && $_COOKIE['name']=='zhangsan') {
	echo "已经登录了";
}

// setcookie('counter', '', -1);
