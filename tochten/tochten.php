<?php

class tochten
{
    public $idTochten;

    public $Route;

    function __construct($idTochten = NULL, $Route = NULL)

    {
        $this->idTochten = $idTochten;
        $this->Route = $Route;
    }

    public function TochtenCreate()
    {
        require_once 'connect.php';

        try {
            $Route = $_POST['route'];

            $sql = "INSERT INTO tochten (Route)VALUES (:Route)";

            $stmt = $pdo->prepare($sql);

            $stmt->bindParram(':Route', $Route, PDO::PARAM_STR);

            $stmt->execute();

            echo "Nieuwe route is toegevoegd:<br>";
        } catch (PDOException $e) {
            die("Fout bij toevoegen van de klant: " . $e->getMessage());
        }
    }
}
