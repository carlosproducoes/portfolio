<?php

require_once "../vendor/autoload.php";

use App\Routes\Router;

loadEnv();

$router = new Router();
$url = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
$request = $_POST;

echo $router->run($url, $request,$method);