<?php


require_once __DIR__ . '/Router.php';

require_once __DIR__. '/../Controllers/HomeController.php';
require_once __DIR__. '/../Controllers/AboutController.php';
require_once __DIR__. '/../Controllers/ContactController.php';

Router::get('/', ['HomeController', 'home']);
Router::get('/about', ['AboutController', 'about']);
Router::get('/contact', ['ContactController', 'contact']);
Router::route();
