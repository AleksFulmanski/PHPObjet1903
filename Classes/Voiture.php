<?php
class Voiture
{

	/*
	* @var string 
	*
	*
	*
	*/
protected $marque;
protected $moteur;
protected $km;

public function __construct(string $firstMarque, string $firstMoteur)
{
	var_dump('Apel du constructeur');
	$this->marque = $firstMarque;
	$this->moteur = $firstMoteur;
	$this->km = 0;

	 }


public function demarrer() : void{
	echo '-----demarrage----';
}

public function rouler(int $kilometres) : void{
	echo '<p>J\'avance de ' . $kilometres . 'km</p>';
	$this->km = $this->km + $kilometres;
	echo '<p>Kilométrage = ' . $this->km . '</p>';
}




//Marque

public function getMarque() : string{
	return $this->marque;
}


public function setMarque(string $marqueNew) : void{
	$this->marque = $marqueNew;
}


//Moteur
public function getMoteur() : string{
	return $this->moteur;
}


public function setMoteur(string $moteurNew) : void{
	$this->moteur = $moteurNew;
}

//km

public function getKm() : int{
	return $this->km;
}


public function setKm(int $km) : void{
	$this->km = $km;
}





}
