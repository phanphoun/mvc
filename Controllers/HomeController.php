
<?php

require_once __DIR__ . '/../Models/Users.php';
require_once __DIR__ . '/../Models/Products.php';

class HomeController
{
    public function home(){
        $products = Products::getAll();
        view('home', ['data' => $products]);
    }

    public function about(){
        $users = Users::getAll();
        view('about', ['data' => $users]);
    }

    public function contact(){
        view('contact');
    }
}
