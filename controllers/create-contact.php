<?php

use Core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);

// Validate and sanitize input
$errors = [];

if (empty($_POST['tel'])) {
    $errors[] = "The phone number field is required.";
} elseif (!preg_match('/^[0-9\s\-\+\(\)]+$/', $_POST['tel'])) {
    $errors[] = "Invalid phone number format.";
}

if (empty($_POST['email'])) {
    $errors[] = "The email field is required.";
} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}

if (empty($_POST['message'])) {
    $errors[] = "The message field is required.";
}

if (!empty($errors)) {
    $errorString = implode('|', $errors);
    $postData = http_build_query($_POST);
    header("Location: /contact?errors={$errorString}&{$postData}");
    exit();
}

// Insert data into the database
$sql = 'INSERT INTO contact (tel, email, message) VALUES (:tel, :email, :message)';

$db->query($sql, [
    ':tel' => htmlspecialchars($_POST['tel']),
    ':email' => htmlspecialchars($_POST['email']),
    ':message' => htmlspecialchars($_POST['message']),
]);

// Redirect to confirmation page
header('Location: /confirmation');
exit();
?>
