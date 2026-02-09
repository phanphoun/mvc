
<?php

 require_once __DIR__ . '/../Models/Products.php'; 

 class ProductController{
     public function getProducts() {
            $result = Products::getAll();
            view('products/getProducts', $result);
    }
    
    public function createProduct() {
        view('products/createProduct');
    }
    
    public function storeProduct() {
        $name = $_POST['name'] ?? '';
        $description = $_POST['description'] ?? '';
        $price = $_POST['price'] ?? 0;
        $stock = $_POST['stock'] ?? 0;
        
        if (!$name) {
            die("Product name is required");
        }
        
        Products::create($name, $description, $price, $stock);
        header('Location: /getProducts');
        exit();
    }
    
    public function editProduct() {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            die("Product ID is required");
        }
        
        $product = Products::getById($id);
        if (!$product) {
            die("Product not found");
        }
        
        view('products/editProduct', $product);
    }
    
    public function updateProduct() {
        $id = $_POST['id'] ?? null;
        $name = $_POST['name'] ?? '';
        $description = $_POST['description'] ?? '';
        $price = $_POST['price'] ?? 0;
        $stock = $_POST['stock'] ?? 0;
        
        if (!$id || !$name) {
            die("Product ID and name are required");
        }
        
        Products::update($id, $name, $description, $price, $stock);
        header('Location: /getProducts');
        exit();
    }
    
    public function deleteProduct() {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            die("Product ID is required");
        }
        
        $product = Products::getById($id);
        if (!$product) {
            die("Product not found");
        }
        
        view('products/deleteProduct', $product);
    }
    
    public function destroyProduct() {
        $id = $_POST['id'] ?? null;
        if (!$id) {
            die("Product ID is required");
        }
        
        Products::delete($id);
        header('Location: /getProducts');
        exit();
    }
 }