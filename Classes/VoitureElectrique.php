<?php 
class VoitureElectrique extends Voiture
{
	protected $energie;



public function __construct(string $firstMarque, string $firstMoteur)

//on pense bien à apeler le constructeur parent
{   parent::__construct($firstMarque, $firstMoteur); 
    $this->energie = 100;

	 }


public function getEnergie() : int{
	return $this->energie;
}


public function setEnergie(int $energie) : void{

	if ($energie <0){
		$this->energie = 0;
	}elseif($energie > 100){
		$this->energie = 100;
	}else {
		$this->energie = $energie;
	}
	

	
}

public function rouler(int $kilometres) : void{
	
	//on avance
	$this->km = $this->km + $kilometres;
	echo '<p>J\'avance de ' . $kilometres . 'km</p>';

//on consomme
	$this->setEnergie($this->energie - $kilometres);

	if($this->energie < $kilometres){
		echo 'Recharger';
	}else{
		//affichage
		echo '<p>Kilométrage = ' . $this->km . ', énergie : ' .$this->energie . ' %</p>';
	}
		
	}

public function recharger(int $recharge = 100)	: void{
$this->setEnergie($this->energie + $recharge);



}
	

	
}
