<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// Route::rule('hello', 'index/Index/hello', 'GET|POST');
Route::rule('hello', 'app\index\controller\Index@hello', 'GET|POST');
Route::get('hi', 'index/Index/hi')->name('my_hi'); //快捷写法

// 动态路由,路由传参数
Route::get('news/:id/info', 'index/News/info')
	->pattern(['id'=>'\d+'])
	->name('news_info');

Route::get('news/list', 'index/News/list')->name('news_list');

Route::get('think', function() {
	return 'hello think';
});
