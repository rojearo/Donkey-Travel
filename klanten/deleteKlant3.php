<?php
require "klant.php"; // Include the Klanten class
?>

<html>

<head>
    <title>Verwijder Klant</title>
</head>

<body>
<div style="border-style: solid; border-radius: 30px; border-color: black; border-width: 5px; background-color: #2d2d2d;
padding: 20px; margin: 100px; display: flex; text-align: center; flex-direction: column; text-decoration: none; color: white;
font-weight: bolder; font-size: 30px; font-family: Arial Black;">
<h1>Verwijder een Klant</h1>
<?php
require "klant.php";

$klantId = $_POST["klantIdForm"];
$delete = $_POST["deleteBox"];

if ($delete == "Yes")  {
    echo "De klant is verwijderd<br>";
    $klant1 = new Klanten();
    $klant1->verwijderKlant($klantId);
} else    {
    echo "De klant is niet verwijderd. <br>";
}
?>
    <a href="../" style="background-color: #212121; font-family: 'Arial Black'; color: white; border-radius: 30px;
        text-decoration: none;">Terug naar het hoofdmenu</a>
</body>
</html>
