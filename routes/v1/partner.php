<?php


/* index */
$router->get('/partner', [ 'as' => 'partner', 'uses' => 'PartnerController@index']);

/* store */
$router->post('/partner/create', [ 'as' => 'partner-create', 'uses' => 'PartnerController@store']);

/* delete */
$router->post('/partner/delete', [ 'as' => 'partner-destroy', 'uses' => 'PartnerController@destroy']);
