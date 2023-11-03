<?php
class Klanten
{
    public $naam;
    public $email;
    public $telefoon;
    public $wachtwoord;

    function __construct($naam = NULL, $email = NULL, $telefoon = NULL, $wachtwoord = NULL)
    {
        $this->naam = $naam;
        $this->email = $email;
        $this->telefoon = $telefoon;
        $this->wachtwoord = $wachtwoord;
    }

    // Setters ----------------------------------------

    public function set_Naam($naam)
    {
        $this->naam = $naam;
    }

    public function set_Email($email)
    {
        $this->email = $email;
    }

    public function set_Telefoon($telefoon)
    {
        $this->telefoon = $telefoon;
    }

    public function set_Wachtwoord($wachtwoord)
    {
        $this->wachtwoord = $wachtwoord;
    }

    // Getters ----------------------------------------

    public function get_Naam()
    {
        return $this->naam;
    }

    public function get_Email()
    {
        return $this->email;
    }

    public function get_Telefoon()
    {
        return $this->telefoon;
    }

    public function get_Wachtwoord()
    {
        return $this->wachtwoord;
    }

    public function klantAfdrukken()
    {
        echo "Naam: " . $this->get_Naam() . "<br/>";
        echo "Email: " . $this->get_Email() . "<br/>";
        echo "Telefoon: " . $this->get_Telefoon() . "<br/>";
        echo "Wachtwoord: " . $this->get_Wachtwoord() . "<br/>";
    }

    public function createKlant()
    {
        require "../login/connect.php";
        try {
            $naam = $this->get_Naam();
            $email = $this->get_Email();
            $telefoon = $this->get_Telefoon();
            $wachtwoord = $this->get_Wachtwoord();

            $sql = "INSERT INTO klanten (naam, email, telefoon, wachtwoord)
                    VALUES ('$naam', '$email', '$telefoon', '$wachtwoord')";

            $conn->exec($sql);
            echo "<h1>Klant is aangemaakt</h1>";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function afdrukkenKlant()
    {
        require "../login/connect.php";
        echo "Naam: " . $this->get_Naam() . "<br/>";
        echo "Email: " . $this->get_Email() . "<br/>";
        echo "Telefoon: " . $this->get_Telefoon() . "<br/>";
        echo "Wachtwoord: " . $this->get_Wachtwoord() . "<br/>";
    }

    function readKlant()
    {
        require "../login/connect.php";
        $sql = $conn->prepare('SELECT * FROM klanten');
        $sql->execute();

        foreach ($sql as $klant) {
            echo '<tr>';
            echo '<td> <th>Naam: </th>' . $klant['naam'] . '</td> <br>';
            echo '<td> <th>Email: </th>' . $klant['email'] . '</td> <br>';
            echo '<td> <th>Telefoon: </th>' . $klant['telefoon'] . '</td> <br>';
            echo '<td> <th>Wachtwoord: </th>' . $klant['wachtwoord'] . '</td> <br>';
            echo '</tr> <br>';
        }

        echo '</table></div>';
    }

    public function updateKlant($id)
    {
        try {
            require "../login/connect.php";
            $naam = $this->get_Naam();
            $email = $this->get_Email();
            $telefoon = $this->get_Telefoon();
            $wachtwoord = $this->get_Wachtwoord();

            $sql = "UPDATE klanten SET naam = '$naam', email = '$email', telefoon = '$telefoon', wachtwoord = '$wachtwoord'
                    WHERE id = '$id'";
            $conn->exec($sql);

            echo "Klant succesvol aangepast!" . "<br/>" . "<br/>";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function verwijderKlant($id)
    {
        try {
            require "../login/connect.php";
            $sql = "DELETE FROM klanten WHERE id = '$id'";
            $conn->exec($sql);

            echo "Klant verwijderd" . "<br/>" . "<br/>";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function zoekKlant($id)
    {
        require "../login/connect.php";

        try {
            $sql = $conn->prepare("
                SELECT id, naam, email, telefoon, wachtwoord FROM klanten WHERE id = :id");
            $sql->bindParam(':id', $id);
            $sql->execute();

            $result = $sql->fetchAll(PDO::FETCH_ASSOC);

            if ($klant = $result[0]) {
                $this->set_Naam($klant["naam"]);
                $this->set_Email($klant["email"]);
                $this->set_Telefoon($klant["telefoon"]);
                $this->set_Wachtwoord($klant["wachtwoord"]);
            } else {
                throw new PDOException("Klant niet gevonden");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            echo '<a href="">Terug naar het hoofdmenu</a>' .
                '</div>';
            exit;
        }
    }
}
