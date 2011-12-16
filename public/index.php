<?php
require_once 'bootstrap.php';

$config = include 'config.php';

$router = new Router();

$controller = $router->getController();

$action = $router->getAction();

$args = $router->getArgs();

$contr = new $controller;

call_user_func_array(array($contr, $action), $args);
