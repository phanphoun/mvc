<?php


require_once __DIR__ . '/../Models/Users.php';

require_once __DIR__ . '/../Models/Products.php';

class HomeController {
    public function home() {
        $users = Users::getAll();
        $products = Products::getAll();
        
        view('index', [
            'users' => $users,
            'products' => $products
        ]);
    }
}