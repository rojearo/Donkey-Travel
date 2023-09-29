<?php
//main page voor de boekingen CRUD+S

class Boekingen
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













}