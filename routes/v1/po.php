<?php


/* index */
$router->get('/po', [ 'as' => 'po', 'uses' => 'PoController@index']);

/* store */
$router->post('/po/create', [ 'as' => 'po-create', 'uses' => 'PoController@store']);

/* delete */
$router->post('/po/delete', [ 'as' => 'po-destroy', 'uses' => 'PoController@destroy']);
