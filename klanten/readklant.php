<?php
include("../login/connect.php");
include("klant.php"); // Include the Klanten class
?>

<!DOCTYPE html>
<html lang="nl">
<link rel="stylesheet" href="">
<head>
    <title>Klanten</title>
</head>
<body>
<div class="formCreate" style="border-style: solid; border-radius: 30px; border-color: black; border-width: 5px; background-color: #2d2d2d;
padding: 20px; margin: 100px; display: flex; text-align: center; flex-direction: column; text-decoration: none; color: white;
font-weight: bolder; font-size: 30px; font-family: Arial Black;">
    <a href="../" style="background-color: #212121; font-family: 'Arial Black'; color: white; border-radius: 30px;
        text-decoration: none;">Terug naar het hoofdmenu</a><br>
    <?php
    $klant = new Klanten();
    $klant->readKlant();
    ?>
</div>
</body>
</html>
