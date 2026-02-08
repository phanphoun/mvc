<?php
function view($viewPath, $data = []){
    require_once __DIR__ . '/views/' . $viewPath . '.php';
    
}