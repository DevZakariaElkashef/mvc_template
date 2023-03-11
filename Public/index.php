<?php

use Core\Router;



require '../vendor/autoload.php';

error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');



$router = new Router;
$router->add('', ['controller'=> 'home', 'action'=> 'index']);
$router->disPatch($_SERVER['QUERY_STRING']);




/**
 * routing
 * controllers
 * views
 * models
 * error handels
*/