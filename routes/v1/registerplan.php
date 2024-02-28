<?php


/* index */
$router->get('/registerplan', [ 'as' => 'registerplan', 'uses' => 'RegisterPlanController@index']);

/* store */
$router->post('/registerplan/create', [ 'as' => 'registerplan-create', 'uses' => 'RegisterPlanController@store']);

/* delete */
$router->post('/registerplan/delete', [ 'as' => 'registerplan-destroy', 'uses' => 'RegisterPlanController@destroy']);
