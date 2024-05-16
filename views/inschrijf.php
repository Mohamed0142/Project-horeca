<?php require_once __DIR__ . '/partials/_header.php' ?>
<body>

  <div class="container">
    <h2>Inschrijfformulier</h2>
    <form action="/inschrijf" method="post">
      <div class="form-group">
        <label for="voornaam">Voornaam:</label>
        <input type="text" id="voornaam" name="voornaam" required>
      </div>
      <div class="form-group">
        <label for="achternaam">Achternaam:</label>
        <input type="text" id="achternaam" name="achternaam" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="location">Locatie:</label>
        <select name="steden">
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
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
      </div>
      <div class="form-group">
        <label for="leeftijd">Leeftijd:</label>
        <input type="number" id="leeftijd" name="leeftijd" required>
      </div>
      <div class="form-group">
        <label for="klas">Klas:</label>
        <select id="klas" name="klas" required>
          <option value="">Kies een klas</option>
          <option value="1A">1A</option>
          <option value="1B">1B</option>
          <option value="1C">1C</option>
        </select>
      </div>
      <button type="submit">Inschrijven</button>
    </form>
  </div>

</body>

<?php require_once __DIR__ . '/partials/_footer.php' ?>