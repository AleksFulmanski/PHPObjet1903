<?php

require 'autoloader.php';

$voitureNormal = new Voiture('Citroen', 'essence');
var_dump($voitureNormal);

$Diesel = new VoitureDiesel('Nissan', 'diesel');
var_dump($Diesel);

$Zoe = new VoitureElectrique('Renault', 'électrique');
var_dump($Zoe);


require 'header.php'
?>

<main class="container">
	<p>Voiture de base : <?= $voitureNormal->getMarque();?></p>
	<p>Voiture diesel : <?= $Diesel->getMarque();?></p>
	<p>Voiture électrique : <?= $Zoe->getMarque();?></p>

<?php 	
$voitureNormal->demarrer();
$Diesel->demarrer();
$Zoe->demarrer();

echo '<h2>Voiture normale</h2>';
        $voitureNormal->rouler(10);
        $voitureNormal->rouler(10);
        $voitureNormal->rouler(10);

echo '<h2>Voiture diesel</h2>';
        $Diesel->rouler(10);
        $Diesel->rouler(10);


echo '<h2>Voiture électrique</h2>';
        $Zoe->rouler(50);
        $Zoe->rouler(70);
        $Zoe->rouler(1000);
        $Zoe->recharger();



?>

</main>

<?php require 'footer.html'?>
