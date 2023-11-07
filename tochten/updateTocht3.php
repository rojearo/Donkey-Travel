<?php
// Inclusief de Tocht klasse en databaseverbinding
require_once("Tocht.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $tochtId = $_POST["idTochten"];
    $nieuweRoute = $_POST["nieuweRoute"];

    // Maak een databaseverbinding
    $mysqli = new mysqli("localhost", "root", "", "donkey_travel");

    // Controleer op fouten in de databaseverbinding
    if ($mysqli->connect_error) {
        die("Databaseverbinding mislukt: " . $mysqli->connect_error);
    }

    // Maak een nieuwe tocht en lees de gegevens op basis van het opgegeven ID
    $tocht = new Tocht("", $mysqli);
    if ($tocht->read($tochtId)) {
        // Update de route met de nieuwe waarde
        $tocht->setRoute($nieuweRoute);

        // Voer de update uit
        if ($tocht->update()) {
            echo "Tochtgegevens zijn bijgewerkt.";
        } else {
            echo "Fout bij het bijwerken van de tochtgegevens.";
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
    <title>Tocht Updaten - Bevestiging</title>
</head>
<body>
<p><a href="tochten.php">Terug naar de Tochtlijst</a></p>
</body>
</html>
