<?php

require "";
require "../connect.php";
?>

<html lang="nl">
<head>
    <title>Zoek boeking 1</title>
</head>
<body>
<h1>Zoeken naar boekingen</h1>
<div class="formCreate" style="border-style: solid; border-radius: 30px; border-color: black; border-width: 5px; background-color: #2d2d2d;
padding: 20px; margin: 100px; display: flex; text-align: center; flex-direction: column; text-decoration: none; color: white;
 font-weight: bolder; font-size: 30px; font-family: Arial Black;">
    <form action="searchBoeking2.php" method="post">
        <label for="boekingId">Boeking ID:</label>
        <input type="text" id="boekingId" name="boekingIdForm">
        <input type="submit" value="Search" style="
                    background-color: #212121; font-family: 'Arial Black'; color: white; border-radius: 30px;">
    </form>
    <a href="../" style="background-color: #212121; font-family: 'Arial Black'; color: white; border-radius: 30px;
        text-decoration: none;"><br/>Terug naar het hoofdmenu</a>
</body>
</html>