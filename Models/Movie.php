<?php
require_once __DIR__ . "/Genere.php";
class Movie{
public $title;
public $duration;
public $language;
public $genere;

function __construct( Genere $_genere, $_title, $_duration, $_language)
{
    $this->title = $_title;
    $this->duration = $_duration;
    $this->language = $_language;
    $this->genere = $_genere;
}

    public function get_data_movie(){
        return "Movie :{$this->title} , Duration{$this->duration} min, Genere:{$this->genere->name}";

    }

}