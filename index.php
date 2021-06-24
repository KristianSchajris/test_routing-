<?php

require __DIR__ . '/vendor/autoload.php';

$router = new \Bramus\Router\Router();

$router->get('/hola/(\w+)', function($name) {
    echo('<h1> Hola ' . htmlentities($name) . '</h1>');
});

$router->run();
