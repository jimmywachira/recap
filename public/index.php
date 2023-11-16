<?php

use Core\Session;
use Core\ValidationException;

const BASE_PATH = __DIR__ .  '/../';

session_start();

require_once BASE_PATH . "/vendor/autoload.php";
require_once BASE_PATH . 'core/functions.php';
require base_path('views/bootstrap.php');

$router = new Core\Router();
$routes = require_once base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try {
    $router->route($uri,$method);
} 

catch(ValidationException $exception){
    Session::flash('errors', $exception->errors);
    Session::flash('old', $exception->old);

    return redirect($router->previousUrl());
}

Session::unflash();

/*
spl_autoload_register(function($class){
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class );
    require base_path("{$class}.php");
});
*/