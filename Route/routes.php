<?php


require_once __DIR__ . '/Router.php';

require_once __DIR__. '/../Controllers/HomeController.php';
require_once __DIR__. '/../Controllers/UserController.php';
require_once __DIR__. '/../Controllers/ProductController.php';

Router::get('/', ['HomeController', 'home']);
Router::get('/getUsers', ['UserController', 'getUsers']);
Router::get('/getProducts', ['ProductController', 'getProducts']);

// Product CRUD routes
Router::get('/product/create', ['ProductController', 'createProduct']);
Router::post('/product/store', ['ProductController', 'storeProduct']);
Router::get('/product/edit', ['ProductController', 'editProduct']);
Router::get('/product/delete', ['ProductController', 'deleteProduct']);
Router::post('/product/update', ['ProductController', 'updateProduct']);
Router::post('/product/destroy', ['ProductController', 'destroyProduct']);

Router::route();
