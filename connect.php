<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'donkey_travel';

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Verbinding met de database is tot stand gebracht.";
} catch (PDOException $e) {
    die("Fout bij verbinden met de database: " . $e->getMessage());
}

