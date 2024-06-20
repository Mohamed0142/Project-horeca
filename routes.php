<?php

$router->get('/', 'controllers/index.php');
$router->get('/inschrijf', 'controllers/inschrijf.php');
$router->get('/about', 'controllers/opleiding.php');
$router->get('/contact', 'controllers/contact.php');
$router->get('/dashboard', 'controllers/dashboard.php');


$request = $_SERVER['REQUEST_URI'];
switch ($request){
    case '/login':
        require_once 'controllers/login.php';
        // Database connection details
        $host = 'localhost';
        $port = 3306;
        $dbname = 'project-horeca';
        $charset = 'utf8mb4';
        $username = 'root'; // Vervang met je gebruikersnaam
        $password = ''; // Vervang met je wachtwoord

        // Create PDO instance
        $dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset={$charset}";
        $db = new PDO($dsn, $username, $password);
        $controller = new LoginController($db);
        $controller->postRequest();
        
}



$router->get('/confirmation', 'controllers/confirmation.php');

$router->post('/inschrijf', 'controllers/create-inschrijf.php');
$router->post('/contact', 'controllers/create-contact.php');

