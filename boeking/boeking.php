<?php
//main page voor de boekingen CRUD+S
error_reporting(E_ERROR | E_PARSE);

class boekingen
{
    public $StartDatum;
    public $EindDatum;
    public $PINCode;


    function __construct($StartDatum = NULL, $EindDatum = NULL, $PINCode = NULL)
    {
        $this->StartDatum = $StartDatum;
        $this->EindDatum = $EindDatum;
        $this->PINCode = $PINCode;

    }

    // Setters -----------------------------------------------------------------------------------------------------

    public function set_StartDatum($StartDatum)
    {
        $this->StartDatum = $StartDatum;
    }
    public function set_EindDatum($EindDatum)
    {
        $this->EindDatum = $EindDatum;
    }

    public function set_PINCode($PINCode)
    {
        $this->PINCode = $PINCode;
    }

    // Getters -----------------------------------------------------------------------------------------------------

    public function get_StartDatum()
    {
        return $this->StartDatum;
    }
    public function get_EindDatum()
    {
        return $this->EindDatum;
    }
    public function get_PINCode()
    {
        return $this->PINCode;
    }


// Geeft de aangemaakte boeking weer op het scherm
    public function boekingenAfdrukken()
    {
        echo $this->get_StartDatum();
        echo "<br/>";
        echo $this->get_EindDatum();
        echo "<br/>";
        echo $this->get_PINCode();
    }

// De function om de boeking te maken
    public function createBoekingen()
    {
        require "../connect.php";
        try {
            $StartDatum = $this->get_StartDatum();
            $EindDatum = $this->get_EindDatum();
            $PINCode = $this->get_PINCode();

            $sql = "INSERT INTO boekingen (StartDatum, Eindatum, PINCode)
            VALUES ('$StartDatum','$EindDatum','$PINCode')";

            $conn->exec($sql);
            echo "<h1>De boeking is aangemaakt</h1>";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    public function afdrukkenBoekingen()
    {
        require "../connect.php";
        echo "Startdatum: " . $this->get_StartDatum();
        echo "<br/>";
        echo "Einddatum: " . $this->get_EindDatum();
        echo "<br/>";
        echo "PINCode: " . $this->get_PINCode();
        echo "<br/>";
    }

    function readBoeking()
    {
        require "../connect.php";
        $sql = $conn->prepare('SELECT * FROM boekingen');
        $sql->execute();

        foreach ($sql as $boeking) {
            echo '<tr>';
            echo '<td> <th>Startdatum: </th>' . $StartDatum['StartDatum'] . '</td> <br>';
            echo '<td> <th>Einddatum: </th>' . $EindDatum['EindDatum'] . '</td> <br>';
            echo '<td> <th>PINCode: </th>' . $PINCode['PINCode'] . '</td> <br>';
            echo '</tr> <br>';
        }

        echo '</table></div>';
    }

    public function updateBoeking($id)
    {
        try {
            require "../connect.php";
            $StartDatum = $this->get_StartDatum();
            $EindDatum = $this->get_EindDatum();
            $PINCode = $this->get_PINCode();

            $sql = "UPDATE boeking SET StartDatum = '$StartDatum', EindDatum = '$EindDatum', PINCode = '$PINCode'
                    WHERE id = '$id'";
            $conn->exec($sql);

            echo "Boeking succesvol aangepast!" . "<br/>" . "<br/>";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function verwijderBoeking($id)
    {
        try {
            require "../connect.php";
            $sql = "DELETE FROM boekingen
                    WHERE id = '$id'";
            $conn->exec($sql);

            echo "Boeking  verwijderd" . "<br/>" . "<br/>";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function zoekBoeking($id)
    {
        require "../connect.php";

        try {
            $sql = $conn->prepare("
                    SELECT id, StartDatum, EindDatum, PINCode FROM boekingen WHERE id = :id");
            $sql->bindParam(':id', $id);
            $sql->execute();

            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            if ($boeking=$result[0]) {
                $this->set_StartDatum($boeking["StartDatum"]);
                $this->set_EindDatum($boeking["EindDatum"]);
                $this->set_PINCode($boeking["PINCode"]);

            } else {
                throw new PDOException("Boeking niet gevonden");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            echo '<a href="../homepage.php">Terug naar het hoofdmenu</a>' .
                '</div>';
            exit;
        }
    }








}