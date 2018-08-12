<?php

$app->get('/', 'App\\Controller\\Home:index');
$app->get('/user/add', 'App\\Controller\\User:add');

$app->post('/user/add/submit', 'App\\Controller\\User:addSubmit');
