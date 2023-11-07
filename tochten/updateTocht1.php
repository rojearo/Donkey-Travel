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
        // Toon het huidige tochtformulier met de bestaande gegevens
        $idTochten = $tocht->getIdTochten();
        $route = $tocht->getRoute();
        ?>

        <!DOCTYPE html>
        <html>
        <head>
            <title>Tocht Updaten</title>
        </head>
        <body>
        <h1>Update Tocht</h1>
        <form method="post" action="updateTocht2.php">
            <input type="hidden" name="idTochten" value="<?php echo $idTochten; ?>">
            <label for="route">Nieuwe Route:</label>
            <input type="text" name="route" id="route" value="<?php echo $route; ?>" required>
            <br>
            <input type="submit" value="Opslaan">
        </form>
        <p><a href="tocht_list.php">Terug naar de Tochtlijst</a></p>
        </body>
        </html>

        <?php
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
<h1>Update Tocht</h1>
<form method="post" action="updateTocht2.php">
    <label for="idTochten">Voer de Tocht ID in:</label>
    <input type="text" name="idTochten" id="idTochten" required>
    <br>
    <input type="submit" value="Zoeken">
</form>
<p><a href="tochten.php">Terug naar de Tochtlijst</a></p>
</body>
</html>
