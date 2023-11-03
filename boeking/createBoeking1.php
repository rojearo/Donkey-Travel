<?php

include("boeking.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../">
    <title>boeking plaatsen</title>
</head>
<body>
        <h1>Boeking plaatsen</h1>
        <form action="createBoeking2.php" method="post">

            <label for="SD">Startdatum:</label>
            <input type="date" name="StartDatum" id="StartDatum" required><br>

            <label for="ED">Einddatum:</label>
            <input type="date" name="EindDatum" id="EindDatum" required><br>

            <label for="PIN">PINCode:</label>
            <input type="text" name="PINCode" id="PIN" required><br>

            <div class="submitButton">
                <input type="submit" value="Boeking plaatsen"
                <div class="formCreate"
                     style="background-color: #212121; font-family: 'Arial Black'; color: white; border-radius: 30px;">
                </div>
        </form>
</body>
</html>