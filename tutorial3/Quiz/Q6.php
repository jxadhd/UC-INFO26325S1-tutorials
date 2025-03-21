<?php
class ArcadeGame
{
    private $name, $mfr, $year, $dictum;
    function __construct($name, $mfr, $year, $dictum) {
        $this->name = $name;
        $this->mfr = $mfr;
        $this->year = $year;
        $this->dictum = $dictum;
    }

    function detailsStr() {
        return "$this->name by $this->mfr, $this->year";
    }

    function dictumStr() {
        return base64_decode($this->dictum);
    }
}
?>