<?php
// Inclusief de Tocht klasse en databaseverbinding
require_once("Tocht.php");

// Controleer of het formulier is verzonden
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verkrijg de ingevoerde route van het formulier
    $route = $_POST["route"];

    // Maak een databaseverbinding
    $mysqli = new mysqli("localhost", "root", "", "donkey_travel");

    // Controleer op fouten in de databaseverbinding
    if ($mysqli->connect_error) {
        die("Databaseverbinding mislukt: " . $mysqli->connect_error);
    }

    // Maak een nieuwe tocht en voeg deze toe aan de database
    $newTocht = new Tocht($route, $mysqli);
    if ($newTocht->create()) {
        echo "Tocht is succesvol toegevoegd.";
    } else {
        echo "Fout bij het toevoegen van de tocht.";
    }

    // Sluit de databaseverbinding
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Tocht</title>
</head>
<body>
<h1>Create Tocht</h1>

<form method="post" action="createTocht2.php">
    <label for="route">Route:</label>
    <input type="text" name="route" id="route" required>
    <br>
    <input type="submit" value="Create Tocht">
</form>
<p><a href="tochten.php">Terug naar de Tochtlijst</a></p>
</body>
</html>
