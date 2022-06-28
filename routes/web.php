<?php
$router->add('posts', ['controller' => 'PostsController', 'action' => 'index', 'method' => 'GET']);
$router->add(
    'blog/{id:\d+}',
    ['controller' => \App\Controllers\PostsController::class, 'action' => 'show', 'method' => 'GET']
);
