<?php 

//autoloader permet de faire les require des classes 
//se trouvant dans le dossier Classes
//on incluera donc ce fichier dans chaque fichier 
//qui utilisera une classe se truvant dans le dossier Classes

function autoloader_perso($className){
	var_dump($className);
	require ('Classes/' . $className . '.php');

}

spl_autoload_register('autoloader_perso');