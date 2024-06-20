<?php require_once __DIR__ . '/partials/_header.php'; ?>
<body class="font-sans w-full h-full m-0 p-0 bg-cover bg-center" style="background-image: url('https://vmn-facto.imgix.net/uploads/2024/05/ef-mbo-utrecht-16x9-1.jpg?auto=compress%2Cformat&q=50');">

<div style="background-color:#E6DCBC; "class="container mx-auto my-12 p-5 bg-gray rounded-lg shadow-lg max-w-md">
    <h2 class="text-center text-gray-800 ">Inschrijfformulier</h2>

    <?php
    $errors = isset($_GET['errors']) ? explode('|', $_GET['errors']) : [];
    $postData = $_GET;
    unset($postData['errors']);
    ?>

    <?php if (!empty($errors)): ?>
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded ">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="/inschrijf" method="post" class="space-y-6">
        <div class="form-group">
            <label for="voornaam" class="block font-bold">Voornaam:</label>
            <input type="text" id="voornaam" name="voornaam" class="w-full p-2 border border-gray-300 rounded" value="<?php echo htmlspecialchars($postData['voornaam'] ?? ''); ?>">
        </div>
        <div class="form-group">
            <label for="achternaam" class="block font-bold">Achternaam:</label>
            <input type="text" id="achternaam" name="achternaam" class="w-full p-2 border border-gray-300 rounded" value="<?php echo htmlspecialchars($postData['achternaam'] ?? ''); ?>">
        </div>
        <div class="form-group">
            <label for="email" class="block font-bold">Email:</label>
            <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded" value="<?php echo htmlspecialchars($postData['email'] ?? ''); ?>">
        </div>
        <div class="form-group">
            <label for="location" class="block font-bold">Locatie:</label>
            <select id="steden" name="steden" class="w-full p-2 border border-gray-300 rounded bg-white">
                <option value="">Selecteer een locatie</option>
                <?php
                $allowedCities = ['Amsterdam', 'Rotterdam', 'Den Haag', 'Utrecht', 'Eindhoven', 'Tilburg', 'Groningen', 'Almere', 'Breda'];
                foreach ($allowedCities as $city): ?>
                    <option value="<?php echo $city; ?>" <?php echo (isset($postData['steden']) && $postData['steden'] === $city) ? 'selected' : ''; ?>><?php echo $city; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="address" class="block font-bold">Address:</label>
            <input type="text" id="address" name="address" class="w-full p-2 border border-gray-300 rounded" value="<?php echo htmlspecialchars($postData['address'] ?? ''); ?>">
        </div>
        <div class="form-group">
            <label for="leeftijd" class="block font-bold">Leeftijd:</label>
            <input type="number" id="leeftijd" name="leeftijd" class="w-full p-2 border border-gray-300 rounded" value="<?php echo htmlspecialchars($postData['leeftijd'] ?? ''); ?>">
        </div>
        <div class="form-group">
            <label for="klas" class="block font-bold">Klas:</label>
            <select id="klas" name="klas" class="w-full p-2 border border-gray-300 rounded bg-white">
                <option value="">Kies een klas</option>
                <?php
                $allowedClasses = ['1A', '1B', '1C'];
                foreach ($allowedClasses as $class): ?>
                    <option value="<?php echo $class; ?>" <?php echo (isset($postData['klas']) && $postData['klas'] === $class) ? 'selected' : ''; ?>><?php echo $class; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="w-full p-2 bg-yellow-300 text-white rounded hover:bg-yellow-300">Inschrijven</button>
    </form>
</div>

</body>
</html>
<?php require_once __DIR__ . '/partials/_footer.php' ?>
