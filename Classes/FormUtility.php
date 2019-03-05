<?php

/** class FormUtility
* - générer le HTML du formulaire
* - effectuer des cotrôles sur les variables POST
*/

class FormUtility{

	/**
	*
	*return string HTML (label et input/textarea)
	*/

 public function generateHTML(string $label) : string{
 	return <<<EOT
<div class="form-group"> 	 
	<label for="item">$label</label>
	<input type="text" id="item" class="form-control"/>
</div>
EOT;

 }

}