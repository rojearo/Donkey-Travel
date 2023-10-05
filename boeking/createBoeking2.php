<?php
require "boeking.php";

$StartDatum = $_POST["StartDatum"];
$EindDatum = $_POST["EindDatum"];
$PINCode = $_POST["PINCode"];



$boeking1 = new boekingen ($StartDatum, $EindDatum, $PINCode);
$boeking1->createBoekingen();
$boeking1->boekingenAfdrukken();

?>


<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1></h1>
<button><a href="../" style="background-color: #212121; font-family: 'Arial Black'; color: white; border-radius: 30px;
        text-decoration: none;">Terug naar het hoofdmenu </a></button>
</body>
</html>