


<?php

 require_once __DIR__ . '/../Models/Users.php'; 

 class UserController{
     public function getUsers() {
        $result = Users::getAll();
        view('users/getUsers', $result);
    }
 }