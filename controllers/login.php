<?php 

view("login.php");

// LoginController.php

require_once '../model/User.php';

class LoginController {
    private $userModel;

    public function __construct($db) {
        $this->userModel = new User($db);
    }

    function postRequest(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
        
            $error = $this->login($email, $password);
            var_dump("POST REQUEST: ", $error);

        }    
    }
    

    public function login($email, $password) {
        $user = $this->userModel->getUserByEmail($email);




        if ($user && $password === $user['password']) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;
            $_SESSION['user'] = $user;
            
            header("Location: /"); 
            exit;
        } else {
            return "Invalid credentials"; 
        }
    }
}
