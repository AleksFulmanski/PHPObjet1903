<?php 
class Product {
const DEFAULT_NB_VIEWS = 0;


private $name;
private $description;
private $price;



public function displayPrice() {
	return 'Le prix : ' . $this->price . '€';
}

public function displayName() {
	return 'Le produit : ' . $this->name . '';
}

public function displayDesc() {
	return 'Description : ' . $this->description . '';
}

//Name
public function getName()
{
	return $this->name;
}

public function setName(string $nouveauNom)
{
	$this->name = $nouveauNom;
}

//Price
public function getPrice() : float
{
	return $this->price;
}

public function setPrice(float $nouveauPrix) : void
{	if($nouveauPrix < 0){
	die('Le prix doit être supérieur  0');
}
	$this->price = $nouveauPrix;
}


//Description

public function getDescription()
{
	return $this->description;
}

public function setDescription(string $nouveauDescription)
{
	$this->description = $nouveauDescription;
}


}


?>