<?php
class Movie{
public $title;
public $genere;
public $language;

function __construct($_title, $_genere, $_language)
{
    $this->title = $_title;
    $this->genere = $_genere;
    $this->language = $_language;
}

}