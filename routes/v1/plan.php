<?php


/* index */
$router->get('/plan', [ 'as' => 'plan', 'uses' => 'PlanController@index']);

/* store */
$router->post('/plan/create', [ 'as' => 'plan-create', 'uses' => 'PlanController@store']);

/* delete */
$router->post('/plan/delete', [ 'as' => 'plan-destroy', 'uses' => 'PlanController@destroy']);
