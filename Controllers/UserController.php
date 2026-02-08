<?php

require_once __DIR__ . '/../Models/Users.php';

class UserController
{
    // Display all users
    public function index()
    {
        $data = Users::getAll();
        view('about', $data);
    }

    // Show create form
    public function create()
    {
        view('user/create');
    }

    // Store new user
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';

            if (Users::create($name, $email)) {
                header('Location: /about');
                exit;
            } else {
                echo "Error creating user";
            }
        }
    }

    // Show edit form
    public function edit()
    {
        $id = $_GET['id'] ?? 0;

        $user = Users::getById($id);
        if ($user) {
            view('user/edit', ['data' => $user]);
        } else {
            header('Location: /about');
            exit;
        }
    }

    // Update user
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? 0;
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';

            if (Users::update($id, $name, $email)) {
                header('Location: /about');
                exit;
            } else {
                echo "Error updating user";
            }
        }
    }

    // Show delete confirmation
    public function delete()
    {
        $id = $_GET['id'] ?? 0;

        $user = Users::getById($id);
        if ($user) {
            view('user/delete', ['data' => $user]);
        } else {
            header('Location: /about');
            exit;
        }
    }

    // Destroy user
    public function destroy()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? 0;

            if (Users::delete($id)) {
                header('Location: /about');
                exit;
            } else {
                echo "Error deleting user";
            }
        }
    }
}
