<?php
$ip = $_SERVER['REMOTE_ADDR'];
$method = $_SERVER['REQUEST_METHOD'];
$port = $_SERVER['SERVER_PORT'];
$timestamp = date('Y-m-d H:i:s');

if ($port == 53) {
    $requestType = 'DNS';
} elseif ($port == 80) {
    $requestType = 'HTTP';
} elseif ($port == 443) {
    $requestType = 'HTTPS';
} else {
    $requestType = 'Unknown';
}

$logEntry = "[Timestamp: $timestamp] - lookup:$ip:$port - $requestType - [$method]\n";

file_put_contents('/home/user/www/obfuscated/pingbacks.txt', $logEntry, FILE_APPEND);

echo $logEntry;
?>

