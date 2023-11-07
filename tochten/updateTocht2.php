<?php
// Inclusief de Tocht klasse en databaseverbinding
require_once("Tocht.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $tochtId = $_POST["idTochten"];
    $Route = $_POST["Route"];

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
            <title>Update Tocht - Bevestiging</title>
        </head>
        <body>
        <h1>Update Tocht - Bevestiging</h1>
        <p>Huidige tochtgegevens:</p>
        <p>ID Tocht: <?php echo $idTochten; ?></p>
        <p>Oude Route: <?php echo $route; ?></p>
        <p>Nieuwe Route: <?php echo $Route; ?></p>

        <form method="post" action="updateTocht3.php">
            <input type="hidden" name="idTochten" value="<?php echo $idTochten; ?>">
            <input type="hidden" name="route" value="<?php echo $Route; ?>">
            <label for="nieuweRoute">Nieuwe Route:</label>
            <input type="text" name="nieuweRoute" id="nieuweRoute" value="<?php echo $Route; ?>" required>
            <br>
            <input type="submit" value="Bevestigen en Opslaan">
        </form>
        <p><a href="updateTocht1.php">Terug naar Tocht Wijzigen</a></p>
        <p><a href="tochten.php">Terug naar de Tochtlijst</a></p>
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
