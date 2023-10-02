<?php
//main page voor de boekingen CRUD+S

class Boeking
{
    public $boekingStartLocatie;
    public $boekingHoeveelDagen;
    public $boekingEindLocatie;
    public $boekingPauzePlaatsen;
    public $boekingOvernachtingen;
    public $boekingBeginTijd;
    public $boekingEindTijd;

    function __construct($boekingStartLocatie = NULL, $boekingHoeveelDagen = NULL, $boekingEindLocatie = NULL, $boekingPauzePlaatsen = NULL, $boekingOvernachtingen = NULL, $boekingBeginTijd = NULL, $boekingEindTijd = NULL)
    {
        $this->boekingStartLocatie = $boekingStartLocatie;
        $this->boekingHoeveelDagen = $boekingHoeveelDagen;
        $this->boekingEindLocatie = $boekingEindLocatie;
        $this->boekingPauzePlaatsen = $boekingPauzePlaatsen;
        $this->boekingOvernachtingen = $boekingOvernachtingen;
        $this->boekingBeginTijd = $boekingBeginTijd;
        $this->boekingEindTijd = $boekingEindTijd;
    }

    // Setters -----------------------------------------------------------------------------------------------------

    public function set_boekingStartLocatie($boekingStartLocatie)
    {
        $this->boekingStartLocatie = $boekingStartLocatie;
    }

    public function set_boekingHoeveelDagen($boekingHoeveelDagen)
    {
        $this->boekingHoeveelDagen = $boekingHoeveelDagen;
    }

    public function set_boekingEindLocatie($boekingEindLocatie)
    {
        $this->boekingEindLocatie = $boekingEindLocatie;
    }

    public function set_boekingPauzePlaatsen($boekingPauzePlaatsen)
    {
        $this->boekingPauzePlaatsen = $boekingPauzePlaatsen;
    }

    public function set_boekingOvernachtingen($boekingOvernachtingen)
    {
        $this->boekingOvernachtingen = $boekingOvernachtingen;
    }

    public function set_boekingBeginTijd($boekingBeginTijd)
    {
        $this->boekingBeginTijd = $boekingBeginTijd;
    }
    public function set_boekingEindtijd($boekingEindTijd)
    {
        $this->boekingEindTijd = $boekingEindTijd;
    }

    // Getters -----------------------------------------------------------------------------------------------------

    public function get_boekingStartLocatie()
    {
        return $this->boekingStartLocatie;
    }

    public function get_boekingHoeveelDagen()
    {
        return $this->boekingHoeveelDagen;
    }
    public function get_boekingEindLocatie()
    {
        return $this->boekingEindLocatie;
    }
    public function get_boekingPauzePlaatsen()
    {
        return $this->boekingPauzePlaatsen;
    }
    public function get_boekingOvernachtingen()
    {
        return $this->boekingOvernachtingen;
    }

    public function get_boekingBeginTijd()
    {
        return $this->boekingBeginTijd;
    }
    public function get_boekingEindTijd()
    {
        return $this->boekingEindTijd;
    }

// Geeft de aangemaakte boeking weer op het scherm
    public function boekingAfdrukken()
    {
        echo $this->get_boekingStartLocatie();
        echo "<br/>";
        echo $this->get_boekingHoeveelDagen();
        echo "<br/>";
        echo $this->get_boekingEindLocatie();
        echo "<br/><br/>";
        echo $this->get_boekingPauzePlaatsen();
        echo "<br/><br/>";
        echo $this->get_boekingOvernachtingen();
        echo "<br/><br/>";
        echo $this->get_boekingBeginTijd();
        echo "<br/><br/>";
        echo $this->get_boekingEindTijd();
        echo "<br/><br/>";
    }

// De function om de boeking te maken
    public function createBoeking()
    {
        require "../config.php";
        try {
            $boekingStartLocatie = $this->get_boekingStartLocatie();
            $boekingHoeveelDagen = $this->get_boekingHoeveelDagen();
            $boekingEindLocatie = $this->get_boekingEindLocatie();
            $boekingPauzePlaatsen = $this->get_boekingPauzePlaatsen();
            $boekingOvernachtingen = $this->get_boekingOvernachtingen();
            $boekingBeginTijd = $this->get_boekingBeginTijd();
            $boekingEindTijd = $this->get_boekingEindTijd();

            $sql = "INSERT INTO boekingen ( boekingStartLocatie, boekingHoeveelDagen, boekingEindLocatie, boekingPauzePlaatsen, boekingOvernachtingen, boekingBeginTijd, boekingEindTijd)
            VALUES ('$boekingStartLocatie', '$boekingHoeveelDagen', '$boekingEindLocatie', '$boekingPauzePlaatsen', '$boekingOvernachtingen', '$boekingBeginTijd', '$boekingEindTijd')";

            $conn->exec($sql);
            echo "<h1>De boeking is aangemaakt</h1>";
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }








}