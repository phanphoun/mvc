<?php
function view($viewPath, $data = []){
    extract($data);
    require_once __DIR__ . '/views/' . $viewPath . '.php';
    
}