<?php
require "klant.php"; // Include the Klanten class
?>

<html>

<head>
    <title>Delete Klant</title>
</head>

<body>
<div class="formCreate" style="border-style: solid; border-radius: 30px; border-color: black; border-width: 5px; background-color: #2d2d2d;
padding: 20px; margin: 100px; display: flex; text-align: center; flex-direction: column; text-decoration: none; color: white;
 font-weight: bolder; font-size: 30px; font-family: Arial Black;">
    <h1>Verwijder een Klant</h1>
<?php
require "klant.php";
require "..\login\connect.php";

$klantId = $_POST["klantIdForm"];
$klant1 = new Klanten();
$klant1->zoekKlant($klantId);
$klant1->klantAfdrukken();
?>

<form action="deleteKlant3.php" method="post">
    <input type="hidden" name="klantIdForm" value="<?php echo $klantId ?>">
    <input type="hidden" name="deleteBox" value="No">
    <input type="hidden" name="deleteBox" value="Yes">
    <label for="deleteBox">Weet u het zeker?</label><br><br>
    <input type="submit" value="Delete" style="background-color: #212121; font-family: 'Arial Black'; color: white; border-radius: 30px;"><br><br>
</form>

<a href="../" style="background-color: #212121; font-family: 'Arial Black'; color: white; border-radius: 30px; text-decoration: none;">Terug naar het hoofdmenu</a>
</body>

</html>
