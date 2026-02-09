
<?php

 require_once __DIR__ . '/../Models/Products.php'; 

 class ContactController{
     public function contact() {
        $result = Products::getAll();
        view('pages/contact', $result);
    }
 }