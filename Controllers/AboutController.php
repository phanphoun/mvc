


<?php

 require_once __DIR__ . '/../Models/Users.php'; 

 class AboutController{
     public function about() {
        $result = Users::getAll();
        view('pages/about', $result);
    }
 }