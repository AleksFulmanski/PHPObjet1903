<?php 
//les inclusions

//require ('Classes/Product.php');
//require ('Classes/Category.php');

//pour eviter de repeter les require fonction autoloader existe

function autoloader_perso($className){
	var_dump($className);
	require ('Classes/' . $className . '.php');

}

spl_autoload_register('autoloader_perso');


echo 'Bonjour';

//création de l'objet

$hamac = new Product();

//changement des valeurs des propriétés avec ->

$hamac->name = 'Hamac';
$hamac->description = 'Pour se reposer';
$hamac->price = 50.99;
var_dump($hamac);


$parasol = new Product();
$parasol->name = 'Parasol';
$parasol->description = 'Pour se proteger du soleil';
$parasol->price = 40;


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

