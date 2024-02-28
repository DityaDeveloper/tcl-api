<?php


/* index */
$router->get('/truck', [ 'as' => 'truck', 'uses' => 'TruckController@index']);

/* store */
$router->post('/truck/create', [ 'as' => 'truck-create', 'uses' => 'TruckController@store']);

/* delete */
$router->post('/truck/delete', [ 'as' => 'truck-destroy', 'uses' => 'TruckController@destroy']);
