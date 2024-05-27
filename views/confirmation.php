<?php require_once __DIR__ . '/partials/_header.php'; ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bevestiging</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="flex justify-center items-center h-screen">
        <div class="text-center">
            <div class="text-2xl mb-8">Je informatie is verzonden!</div>
            <img src="img/pacman.jpeg" alt="Bevestiging" class="mx-auto max-w-full h-auto">
        </div>
    </div>

    <script>
        setTimeout(function(){
            window.location.href = '/inschrijf';
        }, 3000);
    </script>
</body>
</html>

<?php require_once __DIR__ . '/partials/_footer.php'; ?>
