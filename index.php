<?php

$project_location = '/inventaris';
$me = $project_location;

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case $me.'/':
        require 'view/index.php';
        break;
    case $me.'/about':
        require 'view/tentang.php';
        break;
    case $me.'/data':
        require 'view/databarang.php';
        break;
    case $me.'/home':
        require 'view/index.php';
        break;
    case $me.'/bio':
        require 'view/bio.php';
        break;
    default:
        http_response_code(404);
        echo '404';
        break;
}
