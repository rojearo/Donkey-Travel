<?php

require "klant.php"; // Include the Klanten class
require "../login/connect.php";
?>

<html>
<head>
    <title>Update klant formulier</title>
</head>
<body>
<h1>Update Klant</h1>
<div class="formCreate" style="border-style: solid; border-radius: 30px; border-color: black; border-width: 5px; background-color: #2d2d2d;
padding: 20px; margin: 100px; display: flex; text-align: center; flex-direction: column; text-decoration: none; color: white;
font-weight: bolder; font-size: 30px; font-family: Arial Black;">
    <form action="updateKlant2.php" method="post">
        <label for="klantId">Klant ID:</label>
        <input type="number" id="klantId" name="klantIdForm">
        <input type="submit" value="Edit" style="
                    background-color: #212121; font-family: 'Arial Black'; color: white; border-radius: 30px;">
    </form>
    <a href="" style="color: white; text-decoration: none"><br/>Back to main menu</a>
</body>
</html>
