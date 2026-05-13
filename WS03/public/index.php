<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require __DIR__ . '/../vendor/autoload.php';
require '../helpers.php';

use Framework\Router;

//require '../helpers.php';
//require basePath('Framework/Router.php');
//require basePath('Framework/Database.php');
//$config = require basePath('config/db.php');
//$db = new Database($config);

$router = new Router();

$routes = require basePath('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router->route($uri);
