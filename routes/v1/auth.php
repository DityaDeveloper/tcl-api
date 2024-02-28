<?php


/* login */
$router->post('/login', [ 'as' => 'login', 'uses' => 'UserController@login']);

/* registration */
$router->post('/register', [ 'as' => 'register', 'uses' => 'UserController@register']);

/* user */
$router->get('/user', [ 'as' => 'user', 'uses' => 'UserController@index']);
