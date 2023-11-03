<?php

include("klant.php"); // Include the Klanten class
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../">
    <title>Klant registreren</title>
</head>
<body>
<h1>Klant registreren</h1>
<form action="createKlant2.php" method="post">

    <label for="naam">Naam:</label>
    <input type="text" name="naam" id="naam" required><br>

    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required><br>

    <label for="telefoon">Telefoon:</label>
    <input type="text" name="telefoon" id="telefoon" required><br>

    <label for="wachtwoord">Wachtwoord:</label>
    <input type="password" name="wachtwoord" id="wachtwoord" required><br>

    <div class="submitButton">
        <input type="submit" value="Registreren">
    </div>
</form>
</body>
</html>
