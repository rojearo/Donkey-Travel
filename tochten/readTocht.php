<?php
// Inclusief de Tocht klasse en databaseverbinding
require_once("Tocht.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $tochtId = $_POST["idTochten"];

    // Maak een databaseverbinding
    $mysqli = new mysqli("localhost", "root", "", "donkey_travel");

    // Controleer op fouten in de databaseverbinding
    if ($mysqli->connect_error) {
        die("Databaseverbinding mislukt: " . $mysqli->connect_error);
    }

    // Maak een nieuwe tocht en lees de gegevens op basis van het opgegeven ID
    $tocht = new Tocht("", $mysqli);
    if ($tocht->read($tochtId)) {
        // Toon de gegevens van de tocht
        $idTochten = $tocht->getIdTochten();
        $route = $tocht->getRoute();

        echo "<h1>Tochtgegevens</h1>";
        echo "<p>ID Tocht: $idTochten</p>";
        echo "<p>Route: $route</p>";
    } else {
        echo "Tocht niet gevonden.";
    }

    // Sluit de databaseverbinding
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tocht Details</title>
</head>
<body>
<h1>Tocht Details</h1>
<form method="post" action="readTocht.php">
    <label for="idTochten">Voer de Tocht ID in:</label>
    <input type="text" name="idTochten" id="idTochten" required>
    <br>
    <input type="submit" value="Zoeken">
</form>
<p><a href="tochten.php">Terug naar de Tochtlijst</a></p>
</body>
</html>
