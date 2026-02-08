<?php

require_once __DIR__ . '/../Models/Products.php';

class ProductController
{
    // Display all products
    public function index()
    {
        $data = Products::getAll();
        view('home', $data);
    }

    // Show create form
    public function create()
    {
        view('products/create');
    }

    // Store new product
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';
            $price = $_POST['price'] ?? 0;
            $stock = $_POST['stock'] ?? 0;

            if (Products::create($name, $description, $price, $stock)) {
                header('Location: /');
                exit;
            } else {
                echo "Error creating product";
            }
        }
    }

    // Show edit form
    public function edit()
    {
        $id = $_GET['id'] ?? 0;

        $product = Products::getById($id);
        if ($product) {
            view('products/edit', ['data' => $product]);
        } else {
            header('Location: /');
            exit;
        }
    }

    // Update product
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? 0;
            $name = $_POST['name'] ?? '';
            $description = $_POST['description'] ?? '';
            $price = $_POST['price'] ?? 0;
            $stock = $_POST['stock'] ?? 0;

            if (Products::update($id, $name, $description, $price, $stock)) {
                header('Location: /');
                exit;
            } else {
                echo "Error updating product";
            }
        }
    }

    // Show delete confirmation
    public function delete()
    {
        $id = $_GET['id'] ?? 0;

        $product = Products::getById($id);
        if ($product) {
            view('products/delete', ['data' => $product]);
        } else {
            header('Location: /');
            exit;
        }
    }

    // Destroy product
    public function destroy()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? 0;

            if (Products::delete($id)) {
                header('Location: /');
                exit;
            } else {
                echo "Error deleting product";
            }
        }
    }
}
