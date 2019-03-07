<?php 
class VoitureDiesel extends Voiture
{

private $pollution;

public function __construct(string $firstMarque, string $firstMoteur)

//on pense bien à apeler le constructeur parent
{   parent::__construct($firstMarque, $firstMoteur); 
    $this->pollution = 0;

	 }

public function getPollution() : int{
	return $this->pollution;
}


public function setPollution(int $pollution) : void{
	$this->pollution = $pollution;
}

public function rouler(int $kilometres) : void{
	$this->km = $this->km + $kilometres;
	$this->pollution = $this->pollution + $kilometres;
	echo '<p>J\'avance de ' . $kilometres . 'km</p>';
	echo '<p>Kilométrage = ' . $this->km . ', pollution :' .$this->pollution . '</p>';
}



}
