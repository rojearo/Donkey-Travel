<?php



$servername = "localhost";
$dbname = "donkey_travel";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql: host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'donkey_travel';

try {
    $PDO = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $PDO ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Verbinding met de database is tot stand gebracht.";
} catch (PDOException $e) {
    die("Fout bij verbinden met de database: " . $e->getMessage());
}

