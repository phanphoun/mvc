<?php
require_once __DIR__ . '/Router.php';

require_once __DIR__. '/../Controllers/HomeController.php';
require_once __DIR__. '/../Controllers/ProductController.php';
require_once __DIR__. '/../Controllers/UserController.php';


// Home routes
Router::get('/', ['HomeController', 'home']);
Router::get('/about', ['HomeController', 'about']);
Router::get('/contact', ['HomeController', 'contact']);

// Product routes
Router::get('/product/create', ['ProductController', 'create']);
Router::post('/product/store', ['ProductController', 'store']);
Router::get('/product/edit', ['ProductController', 'edit']);
Router::post('/product/update', ['ProductController', 'update']);
Router::get('/product/delete', ['ProductController', 'delete']);
Router::post('/product/destroy', ['ProductController', 'destroy']);

// User routes
Router::get('/user/create', ['UserController', 'create']);
Router::post('/user/store', ['UserController', 'store']);
Router::get('/user/edit', ['UserController', 'edit']);
Router::post('/user/update', ['UserController', 'update']);
Router::get('/user/delete', ['UserController', 'delete']);
Router::post('/user/destroy', ['UserController', 'destroy']);

Router::route();