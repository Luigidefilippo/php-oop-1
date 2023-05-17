<?php
require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/Models/Genere.php";


$jamesbond = new Movie (new Genere('action'), 'jamesbond', 160,'img');

var_dump($jamesbond);
echo $jamesbond->get_data_movie();