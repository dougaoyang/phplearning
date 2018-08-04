<?php

$str = 'hello "world';

echo stripslashes(addslashes($str));

$html = '<h1>大标题</h1>';
echo $html;
echo '<br>';
echo htmlspecialchars_decode(htmlspecialchars($html));
