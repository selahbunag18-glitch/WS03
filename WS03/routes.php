<?php

$router->get('/', 'HomeController@index');
$router->get('/listings/create', 'ListingController@create');
$router->get('/listings', 'ListingController@index');
$router->get('/listing/{id}', 'ListingController@show');
