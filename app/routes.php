<?php

$router->get('', 'PagesController@home');

$router->get('home', 'PagesController@home');

$router->get('about', 'PagesController@about');

$router->get('contact', 'PagesController@contact');

$router->post('addUser', 'UsersController@store');

//var_dump($router);