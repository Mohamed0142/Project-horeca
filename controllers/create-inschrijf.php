<?php

use Core\Database;

$config = require base_path('config.php');

$db = new Database($config['database']);

$errors = [];

$requiredFields = ['voornaam', 'achternaam', 'email', 'steden', 'address', 'leeftijd', 'klas'];

foreach ($requiredFields as $field) {
    if (empty($_POST[$field])) {
        $errors[] = "De $field moet gevuld worden.";
    }
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalide email formaat.";
}

if (!is_numeric($_POST['leeftijd']) || intval($_POST['leeftijd']) <= 0) {
    $errors[] = "Invalide leeftijd. Het moet hoger dan 0 zijn.";
}

$allowedCities = ['Amsterdam', 'Rotterdam', 'Den Haag', 'Utrecht', 'Eindhoven', 'Tilburg', 'Groningen', 'Almere', 'Breda'];
if (!in_array($_POST['steden'], $allowedCities)) {
    $errors[] = "Invalide steden geselecteerd.";
}

$allowedClasses = ['1A', '1B', '1C'];
if (!in_array($_POST['klas'], $allowedClasses)) {
    $errors[] = "Invalide klas geselecteerd.";
}

if (!empty($errors)) {
    $errorString = implode('|', $errors);
    $postData = http_build_query($_POST);
    header("Location: /inschrijf?errors={$errorString}&{$postData}");
    exit();
}

$sql = 'INSERT INTO inschrijfformulier (voornaam, achternaam, email, steden, address, leeftijd, klas)';
$sql .= ' VALUES (:voornaam, :achternaam, :email, :steden, :address, :leeftijd, :klas)';

$db->query($sql, [
    ':voornaam' => htmlspecialchars($_POST['voornaam']),
    ':achternaam' => htmlspecialchars($_POST['achternaam']),
    ':email' => htmlspecialchars($_POST['email']),
    ':steden' => htmlspecialchars($_POST['steden']),
    ':address' => htmlspecialchars($_POST['address']),
    ':leeftijd' => intval($_POST['leeftijd']),
    ':klas' => htmlspecialchars($_POST['klas'])
]);

header('Location: /confirmation');
exit();
?>
