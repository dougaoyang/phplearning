<?php

// header("HTTP/1.0 404 Not Found");

$rand = rand(10000, 99999);
echo json_encode([
	'rand' => $rand,
]);
// echo '<h1>'.rand(10000, 99999).'</h1>';
