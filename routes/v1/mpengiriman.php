<?php


/* index */
$router->get('/pengiriman', [ 'as' => 'pengiriman', 'uses' => 'MPengirimanController@index']);

/* store */
$router->post('/pengiriman/create', [ 'as' => 'pengiriman-create', 'uses' => 'MPengirimanController@store']);

/* delete */
$router->post('/pengiriman/delete', [ 'as' => 'pengiriman-destroy', 'uses' => 'MPengirimanController@destroy']);
