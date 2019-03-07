<?php
class Gateau
{
	private static $nbEated = 0;
	private $name;


 public static function getNbEated(): int{
 	return static::$nbEated;
 }

//self (remplace $this)- transformer en static si refus d'accès (privé)
 //resolution a la volée c'est l'utilisatio de static pour que 
public static function setNbEated(int $nb): void {
	static::$nbEated = self::$nbEated + $nb;
}

public static function addEated(): void{
 	static::$nbEated++;
 }

public function __construct(string $name){
$this->name = $name;

}
/**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }



}