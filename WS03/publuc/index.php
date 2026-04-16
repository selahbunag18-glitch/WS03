<?
require '../helper.php';
loadView('home');

$routers = [
    '/' => 'controller/home.php',
    '/listings' => 'controller/listings/index.php',
    '/listings/create' => 'controller/listing/create.php',
    '404' => 'controller/404.php'
];
