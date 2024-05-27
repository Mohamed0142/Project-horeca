<?php require_once __DIR__ . '/partials/_header.php' ?>
<body class="bg-gray-100">

  <div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Inschrijfformulier</h2>
    <form action="/inschrijf" method="post">
      <div class="form-group mb-4">
        <label for="voornaam" class="block text-gray-700 font-bold mb-2">Voornaam:</label>
        <input type="text" id="voornaam" name="voornaam" required class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <div class="form-group mb-4">
        <label for="achternaam" class="block text-gray-700 font-bold mb-2">Achternaam:</label>
        <input type="text" id="achternaam" name="achternaam" required class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <div class="form-group mb-4">
        <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
        <input type="text" id="email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <div class="form-group mb-4">
        <label for="location" class="block text-gray-700 font-bold mb-2">Locatie:</label>
        <select name="steden" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="Amsterdam">Amsterdam</option>
            <option value="Rotterdam">Rotterdam</option>
            <option value="Den Haag">Den Haag</option>
            <option value="Utrecht">Utrecht</option>
            <option value="Eindhoven">Eindhoven</option>
            <option value="Tilburg">Tilburg</option>
            <option value="Groningen">Groningen</option>
            <option value="Almere">Almere</option>
            <option value="Breda">Breda</option>
        </select>
      </div>
      <div class="form-group mb-4">
        <label for="address" class="block text-gray-700 font-bold mb-2">Address:</label>
        <input type="text" id="address" name="address" required class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <div class="form-group mb-4">
        <label for="leeftijd" class="block text-gray-700 font-bold mb-2">Leeftijd:</label>
        <input type="number" id="leeftijd" name="leeftijd" required class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      <div class="form-group mb-4">
        <label for="klas" class="block text-gray-700 font-bold mb-2">Klas:</label>
        <select id="klas" name="klas" required class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="">Kies een klas</option>
          <option value="1A">1A</option>
          <option value="1B">1B</option>
          <option value="1C">1C</option>
        </select>
      </div>
      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Inschrijven</button>
    </form>
  </div>

</body>

<?php require_once __DIR__ . '/partials/_footer.php' ?>
