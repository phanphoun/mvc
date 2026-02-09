<?php


require_once __DIR__ . '/Router.php';

require_once __DIR__. '/../Controllers/HomeController.php';


Router::get('/', ['HomeController', 'home']);
Router::get('/about', ['HomeController', 'about']);
Router::get('/contact', ['HomeController', 'contact']);
Router::route();
