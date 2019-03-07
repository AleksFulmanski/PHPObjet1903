<?php 
//les inclusions

//require ('Classes/Product.php');
//require ('Classes/Category.php');

//pour eviter de repeter les require fonction autoloader existe

require('autoloader.php');


echo 'Bonjour';

//création de l'objet

$hamac = new Product();

//changement des valeurs des propriétés avec ->

$hamac->setName('Hamac');
$hamac->setDescription('Pour se reposer');
$hamac->setPrice(50.99);
var_dump($hamac);


$parasol = new Product();
$parasol->setName('Parasol');
$parasol->setDescription('Pour se proteger du soleil');
$parasol->setPrice(40);


//debug du parasol
var_dump($parasol);

//recuperer et afficher une propriété 
//echo '<p>' . $parasol->price . '€</p>';

echo '<p>' . $parasol->displayName() . '</p>';
echo '<p>' . $parasol->displayPrice() . '</p>';

echo '<p>Nombre de vues par défaut des produits : '. $parasol::DEFAULT_NB_VIEWS . '</p>';

echo '<p>' . $parasol->displayDesc() . '</p>';





echo '<p>' . $hamac->displayName() . '</p>';
echo '<p>' . $hamac->displayPrice() . '</p>';

echo '<p>Nombre de vues par défaut des produits : '. $hamac::DEFAULT_NB_VIEWS . '</p>';

echo '<p>' . $hamac->displayDesc() . '</p>';


$voyage = new Category();











?>

