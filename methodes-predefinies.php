<?php

require 'autoloader.php';

$voiture = new Voiture( 'Renault', 'Essence');
var_dump($voiture);
$voiture2 = new Voiture( 'Peugeot', 'Diesel');  
var_dump($voiture2);

//CRUD create read update delete