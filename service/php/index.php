<?php
require 'vendor/autoload.php';

$app = new \Slim\App();

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
