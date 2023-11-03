<?php
require "";
?>
<html>

<head>
    <title>Delete boeking 2</title>
</head>
<body>
<div class="formCreate" style="border-style: solid; border-radius: 30px; border-color: black; border-width: 5px; background-color: #2d2d2d;
padding: 20px; margin: 100px; display: flex; text-align: center; flex-direction: column; text-decoration: none; color: white;
 font-weight: bolder; font-size: 30px; font-family: Arial Black;">
    <h1>Verwijder een boeking </h1>
<?php
require "boeking.php";
require "../login/connect.php";


$boekingId = $_POST["boekingIdForm"];
$boeking1 = new boekingen();
$boeking1->zoekBoeking($boekingId);
$boeking1->afdrukkenBoekingen();
?>


<form action="deleteBoeking3.php" method="post">
    <input type="hidden" name="boekingIdForm" value=" <?php echo $boekingId ?>">
    <input type="hidden" name="deleteBox" value="No">
    <input type="hidden" name="deleteBox" value="Yes">
    <label for="deleteBox">Weet u het zeker?</label><br><br>
    <input type="submit" value="Delete" style="
                    background-color: #212121; font-family: 'Arial Black'; color: white; border-radius: 30px;"><br><br>
</form>

<a href="../" style="background-color: #212121; font-family: 'Arial Black'; color: white; border-radius: 30px;
        text-decoration: none;">Back to main menu</a>
</body>

</html>