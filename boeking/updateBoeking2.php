<?php
require "../connect.php";
?>
<html>
<head>
    <title></title>
</head>
<body>
<h1>Update boeking</h1>

<?php
require "boeking.php";
$boekingId = $_POST["boekingIdForm"];
$boeking1 = new boekingen();
$boeking1->zoekBoeking($boekingId);

$startDatum = $boeking1->get_StartDatum();
$eindDatum = $boeking1->get_EindDatum();
$PINCode = $boeking1->get_PINCode();
?>
<div class="formCreate" style="border-style: solid; border-radius: 30px; border-color: black; border-width: 5px; background-color: #2d2d2d;
padding: 20px; margin: 100px; display: flex; text-align: center; flex-direction: column; text-decoration: none; color: white;
 font-weight: bolder; font-size: 30px; font-family: Arial Black;">
    <form action="updateBoeking3.php" method="post">
        <?php echo "Boeking ID: " . $boekingId; ?>
        <input type="hidden" name="boekingIdForm" value="<?php echo $boekingId; ?>"><br/>

        <label for="startDatum">Startdatum:</label>
        <input type="text" name="startDatumForm" value="<?php echo $startDatum; ?>"><br/>

        <label for="eindDatum">Einddatum:</label>
        <input type="text" name="planetTypeForm" value="<?php echo $eindDatum; ?>"><br/>


        <input type="submit" value="Edit" style="
                    background-color: #212121; font-family: 'Arial Black'; color: white; border-radius: 30px;"><br/><br/>
    </form>

    <a href="../homepage.php" style="background-color: #212121; font-family: 'Arial Black'; color: white; border-radius: 30px;
        text-decoration: none;">Terug naar het hoofdmenu</a>
</body>
</html>
