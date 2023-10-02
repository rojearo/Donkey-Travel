<?php



$boekingStartLocatie = $_POST["boekingStartLocatie"];
$boekingHoeveelDagen = $_POST["boekingHoeveelDagen"];
$boekingEindLocatie = $_POST["boekingEindLocatie"];
$boekingPauzePlaatsen = $_POST["boekingPauzePlaatsen"];
$boekingOvernachtingen = $_POST["boekingOvernachtingen"];
$boekingBeginTijd = $_POST["boekingBeginTijd"];
$boekingEindTijd = $_POST["boekingEindTijd"];


$boeking1 = new Boeking ($boekingStartLocatie, $boekingHoeveelDagen, $boekingEindLocatie, $boekingPauzePlaatsen, $boekingOvernachtingen, $boekingBeginTijd, $boekingEindTijd);
$boeking1->createBoeking();
$boeking1->boekingAfdrukken();

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

<h1></h1>
<button><a href="../" style="background-color: #212121; font-family: 'Arial Black'; color: white; border-radius: 30px;
        text-decoration: none;">Terug naar het hoofdmenu </a></button>
</body>
</html>