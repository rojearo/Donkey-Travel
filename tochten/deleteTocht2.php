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
        // Voer de verwijdering uit
        if ($tocht->delete()) {
            echo "Tocht is verwijderd.";
        } else {
            echo "Fout bij het verwijderen van de tocht.";
        }
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
    <title>Tocht Verwijderen - Bevestiging</title>
</head>
<body>
<p><a href="tochten.php">Terug naar de Tochtlijst</a></p>
</body>
</html>
