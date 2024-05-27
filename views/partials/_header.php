<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <?php if($_SERVER['REQUEST_URI'] === '/'): ?><link rel="stylesheet" href="/css/index.css"> <?php endif; ?>
    <?php if($_SERVER['REQUEST_URI'] === '/inschrijf'): ?><link rel="stylesheet" href="/css/inschrijf.css"> <?php endif; ?>
    <script src="https://kit.fontawesome.com/06a2eca3f5.js" crossorigin="anonymous"></script>
</head>

<header>
    <?php require_once __DIR__. '/_nav.php'; ?>
</header>