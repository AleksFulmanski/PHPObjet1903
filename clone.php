<?php
require('autoloader.php');

//on cree une instance de produit

//par référence : Parasol 
$product1 = new Product();
$product1->setName('Hamac');

$product2 = $product1;

$product1->setName('Parasol');

echo '<p>' . $product2->getName() . '</p>'; 



//par copie : clone /Hamac le changement du nom de $product n'a aucune influence

$product1 = new Product();
$product1->setName('Hamac');

$product2 = clone $product1;

$product1->setName('Parasol');

echo '<p>' . $product2->getName() . '</p>'; 
