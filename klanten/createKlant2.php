<?php

require "klant.php";

$naam = $_POST["naam"];
$email = $_POST["email"];
$telefoon = $_POST["telefoon"];
$wachtwoord = $_POST["wachtwoord"];

$klant = new Klanten($naam, $email, $telefoon, $wachtwoord);
$klant->createKlant();
$klant->klantAfdrukken();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registratie voltooid</title>
</head>
<body>
<h1>Registratie voltooid</h1>
<button>
    <a href="../" style="background-color: #212121; font-family: 'Arial Black'; color: white; border-radius: 30px;
        text-decoration: none;">Terug naar het hoofdmenu
    </a>
</button>
</body>
</html>
