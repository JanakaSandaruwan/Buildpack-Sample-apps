<?php
require 'vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();

// Define a route
$app->get('/tasks', function ($request, $response, $args) {
    $tasks = [
        ['id' => 1, 'title' => 'Task 1'],
        ['id' => 2, 'title' => 'Task 2'],
        ['id' => 3, 'title' => 'Task 3']
    ];
    return $response->withJson($tasks);
});

$app->run();
