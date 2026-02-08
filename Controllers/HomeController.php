<?php

require_once __DIR__ . '/../Models/Users.php';
require_once __DIR__ . '/../Models/Products.php';

class HomeController {
    public function home() {
        // require_once __DIR__ . '/../views/home.php';
        
        view('home');
    }

    public function about() {
        // require_once __DIR__ . '/../views/about.php';
        $result = Users::getAll();
        view('about', $result);
    }

    public function contact() {
        // require_once __DIR__ . '/../views/contact.php';
        $result = Products::getAll();
        view('contact', $result);
    }
}