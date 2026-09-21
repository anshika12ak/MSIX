<?php
// Vercel entry point: routes requests to the PHP pages in the project root.
$root = dirname(__DIR__);
$page = $_GET['__page'] ?? 'index';
$page = basename(preg_replace('/\.php$/', '', $page));

$file = $root . '/' . $page . '.php';
if (!preg_match('/^[a-z0-9-]+$/i', $page) || !is_file($file)) {
    http_response_code(404);
    echo 'Not Found';
    return;
}

chdir($root);
require $file;
