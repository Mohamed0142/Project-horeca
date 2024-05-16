<?php

var_dump($_POST);

use Core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);


$sql = 'INSERT INTO Inschrijfformulier (voornaam, achternaam, email, steden, address, leeftijd, klas)';
$sql .= 'VALUES (:voornaam, :achternaam, :email, :steden, :address, :leeftijd, :klas)';

$db->query($sql, [
        ':voornaam' => $_POST['voornaam'],
        ':achternaam' => $_POST['achternaam'],
        ':email' => $_POST['email'],
        ':steden' => $_POST['steden'],
        ':address' => $_POST['address'],
        ':leeftijd' => $_POST['leeftijd'],
        ':klas' => $_POST['klas']
]);


header('Location: /confirmation');
exit();