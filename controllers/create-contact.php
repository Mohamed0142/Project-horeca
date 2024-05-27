<?php

var_dump($_POST);

use Core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);


$sql = 'INSERT INTO contact (tel, email,message)';
$sql .= 'VALUES (:tel, :email, :message)';

$db->query($sql, [
        ':tel' => $_POST['tel'],
        ':email' => $_POST['email'],
        ':message' => $_POST['message'],
]);


header('Location: /confirmation');
exit();