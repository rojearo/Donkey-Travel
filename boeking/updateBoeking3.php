<?php

echo '<div style="border-style: solid; border-radius: 30px; border-color: black; border-width: 5px; background-color: #2d2d2d; padding: 10px;
 margin-top: 50px; margin-left: 175px; margin-right: 175px; display: flex; text-align: center; flex-direction: column; text-decoration: none; color: white;
 font-weight: bolder; font-size: 30px; font-family: Arial Black;">';
include "boeking.php";
$boekingId = $_POST["boekingIdForm"];
$startDatum = $_POST["startDatumForm"];
$eindDatum = $_POST["eindDatumForm"];


$boeking1 = new boekingen($startDatum, $eindDatum);
$boeking1->updateBoeking($boekingId);
echo "Startdatum aanpassen: " . $startDatum . "<br/>";
echo "Einddatum aanpassen: " . $eindDatum . "<br/>";

?>
<body>

<a href="" style="background-color: #212121; font-family: 'Arial Black'; color: white; border-radius: 30px;
        text-decoration: none;">Back to main menu</a>
</body>

