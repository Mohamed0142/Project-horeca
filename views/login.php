<?php

$config = include('../config.php');

require_once '../controllers/login.php';
$loginController = new LoginController([
    'database' => [
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'project-horeca',
        'charset' => 'utf8mb4'
    ],
]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-1/3">
        <h2 class="text-2xl font-bold mb-4">Login</h2>
        <?php if(isset($error)): ?>
            <p class="text-red-500 mb-4"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST" action="/login">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <button type="submit" class="w-full bg-yellow-800 hover:bg-yellow-500 text-white py-2 px-4 rounded-md ">Login</button>
        </form>
        <a href="/" class="mt-4 inline-block w-full text-center bg-yellow-400 hover:bg-yellow-500 py-2 px-4 rounded-md hover:bg-gray-600">Back Home</a>
    </div>
</body>
</html>
