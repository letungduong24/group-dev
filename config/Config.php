<?php
define('APP_ROOT', dirname(__FILE__, 2));

$scriptName = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$basePath = rtrim(str_replace('/views/admin', '', $scriptName), '/'); // Loại bỏ /views/admin nếu tồn tại và dấu '/' cuối cùng

if ($basePath === '') {
    $basePath = '/'; 
}

define('BASE_URL', $basePath);
