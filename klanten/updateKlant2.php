<?php
require "klant.php"; // Include the Klanten class
require "../login/connect.php";
?>

<html>
<head>
    <title>Update Klant</title>
</head>
<body>
<h1>Update Klant</h1>

<?php
$klantId = $_POST["klantIdForm"];
$klant = new Klanten();
$klant->updateKlant($klantId); // Assuming you have a zoekKlant method

$naam = $klant->get_naam();
$email = $klant->get_email();
$telefoon = $klant->get_telefoon();
$wachtwoord = $klant->get_wachtwoord();
?>

<div class="formCreate" style="border-style: solid; border-radius: 30px; border-color: black; border-width: 5px; background-color: #2d2d2d;
padding: 20px; margin: 100px; display: flex; text-align: center; flex-direction: column; text-decoration: none; color: white;
font-weight: bolder; font-size: 30px; font-family: Arial Black;">
    <form action="updateKlant3.php" method="post">
        <?php echo "Klant ID: " . $klantId; ?>
        <input type="hidden" name="klantIdForm" value="<?php echo $klantId; ?>"><br/>

        <label for="naam">Naam:</label>
        <input type="text" name="naamForm" value="<?php echo $naam; ?>"><br/>

        <label for="email">Email:</label>
        <input type="text" name="emailForm" value="<?php echo $email; ?>"><br/>

        <label for="telefoon">Telefoon:</label>
        <input type="text" name="telefoonForm" value="<?php echo $telefoon; ?>"><br/>

        <label for="wachtwoord">Wachtwoord:</label>
        <input type="text" name="wachtwoordForm" value="<?php echo $wachtwoord; ?>"><br/>

        <input type="submit" value="Edit" style="
                    background-color: #212121; font-family: 'Arial Black'; color: white; border-radius: 30px;"><br/><br/>
    </form>

    <a href="" style="background-color: #212121; font-family: 'Arial Black'; color: white; border-radius: 30px;
        text-decoration: none;">terug naar het hoofdmenu</a>
</body>
</html>
