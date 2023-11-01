<?php

?>
<html>
<head>
    <title>Resultaten van gezochte boekingen</title>
</head>
<body>
    <h1>Resultaten:</h1>

<?php
require "boeking.php";
require "../connect.php";

$boekingId = $_POST["boekingIdForm"];
$boeking1 = new boekingen();

try {
    echo '<div class="formCreate" style="border-style: solid; border-radius: 30px; border-color: black; border-width: 5px; background-color: #2d2d2d;
padding: 20px; margin: 100px; display: flex; text-align: center; flex-direction: column; text-decoration: none; color: white;
 font-weight: bolder; font-size: 30px; font-family: Arial Black;">';
    $boeking1->zoekBoeking($boekingId);
    $boeking1->afdrukkenBoekingen();
    echo '<a href="../" style="background-color: #212121; font-family: color: white; border-radius: 30px;
        text-decoration: none;">Terug naar het hoofdmenu</a>' .
    '</div>';
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
</body>
</html>
