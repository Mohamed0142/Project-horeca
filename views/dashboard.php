<?php require_once __DIR__ . '/partials/_header.php'; ?>
<?php

use Core\Database;


$config = require '../config.php';


$db = new Database($config['database']);

$contact_result = $db->query("SELECT * FROM contact")->get();
$inschrijf_result = $db->query("SELECT * FROM inschrijfformulier")->get();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Dashboard</h1>

    <div class="mb-8">
        <h2 class="text-2xl font-semibold mb-2">Contact Table</h2>
        <table class="min-w-full bg-white shadow-md rounded">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Tel</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Message</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($contact_result) > 0) : ?>
                    <?php foreach ($contact_result as $row) : ?>
                        <tr>
                            <td class="py-2 px-4 border-b"><?php echo $row['id']; ?></td>
                            <td class="py-2 px-4 border-b"><?php echo $row['tel']; ?></td>
                            <td class="py-2 px-4 border-b"><?php echo $row['email']; ?></td>
                            <td class="py-2 px-4 border-b"><?php echo $row['message']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td class="py-2 px-4 border-b text-center" colspan="4">No data available</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div>
        <h2 class="text-2xl font-semibold mb-2">Inschrijfformulier Table</h2>
        <table class="min-w-full bg-white shadow-md rounded">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Voornaam</th>
                    <th class="py-2 px-4 border-b">Achternaam</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Steden</th>
                    <th class="py-2 px-4 border-b">Address</th>
                    <th class="py-2 px-4 border-b">Leeftijd</th>
                    <th class="py-2 px-4 border-b">Klas</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($inschrijf_result) > 0) : ?>
                    <?php foreach ($inschrijf_result as $row) : ?>
                        <tr>
                            <td class="py-2 px-4 border-b"><?php echo $row['id']; ?></td>
                            <td class="py-2 px-4 border-b"><?php echo $row['voornaam']; ?></td>
                            <td class="py-2 px-4 border-b"><?php echo $row['achternaam']; ?></td>
                            <td class="py-2 px-4 border-b"><?php echo $row['email']; ?></td>
                            <td class="py-2 px-4 border-b"><?php echo $row['steden']; ?></td>
                            <td class="py-2 px-4 border-b"><?php echo $row['address']; ?></td>
                            <td class="py-2 px-4 border-b"><?php echo $row['leeftijd']; ?></td>
                            <td class="py-2 px-4 border-b"><?php echo $row['klas']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td class="py-2 px-4 border-b text-center" colspan="8">No data available</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>


<?php require_once __DIR__ . '/partials/_footer.php'; ?>
