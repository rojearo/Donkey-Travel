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
        <h1>Boeking plaatsen</h1>
        <form action="createBoeking2.php" method="post">

            <label for="BSL">Start locatie:</label>
            <select name="boekingStartLocatie" id="boekingStartLocatie">
                <option>Hier</option>
                <option>Daar</option>
                <option>Hierzo</option>
                <option>Daarzo</option>
            </select>
            <br>
            <label for="BHD">Hoeveel dagen:</label>
            <select name="boekingHoeveelDagen" id="boekingHoeveelDagen">
                <option>1 dag</option>
                <option>2 dagen</option>
                <option>5 dagen</option>
                <option>7 dagen</option>
            </select>
            <br>
            <label for="BEL">Eind locatie:</label>
            <select name="boekingEindLocatie" id="boekingEindLocatie">
                <option>Hier</option>
                <option>Daar</option>
                <option>Hierzo</option>
                <option>Daarzo</option>
            </select>
            <br>
            <label for="BPP">Pauzeplaats:</label>
            <select name="boekingPauzePlaatsen" id="boekingPauzePlaatsen">
                <option>Pauzeplaats Hier</option>
                <option>Pauzeplaats Daar</option>
                <option>Pauzeplaats Hierzo</option>
                <option>Pauzeplaats Daarzo</option>
            </select>
            <br>
            <label for="BO">Overnachting locatie:</label>
            <select name="boekingOvernachting" id="boekingOvernachting">
                <option>Overnachting Hier</option>
                <option>Overnachting Daar</option>
                <option>Overnachting Hierzo</option>
                <option>Overnachting Daarzo</option>
            </select>
            <br>
            <label for="BBT">Begin tijd:</label>
            <input type="date" name="boekingBeginTijd" id="boekingBeginTijd" required><br>

            <label for="BET">Eind tijd:</label>
            <input type="date" name="boekingEindTijd" id="boekingEindTijd" required><br>

            <div class="submitButton">
                <input type="submit" value="Boeking plaatsen"
                <div class="formCreate"
                     style="background-color: #212121; font-family: 'Arial Black'; color: white; border-radius: 30px;">
                </div>
        </form>
    </div>

</body>
</html>