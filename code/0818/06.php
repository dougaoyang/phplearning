<?php
session_start();

if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
	echo '用户'. $_SESSION['username'] . '已登录';
} else {
	echo '未登录';
}

