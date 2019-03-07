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

 public function generateHTML(
 	string $label, 
 	string $type, 
 	string $id,
 	?string $placeholder = '') : string{

// l'eventuelle ancienne valeur
 	$oldValue = (isset($_POST[$id])) ? $_POST[$id] : '';

 // verifier le type pour founir soit:
 	//un input : text, number
 	//un textarea : textarea, wiget etc...

 	switch ($type) {
 		case 'text':
 		case 'number':
 			$widget = $this->getHTMLInput($type, $id, $oldValue, $placeholder);
 			break;
 		case 'textarea': 
 			$widget = $this->getHTMLTextarea($id, $oldValue, $placeholder);
 			break;
 		default:
 			die ('Le type de donné est inconnu');
 	}

 	return <<<EOT
<div class="form-group">
<label for="$id">$label</label>
$widget
</div>
EOT;

}


private function getHTMLInput( 
 	string $type, 
 	string $id,
 	string $oldValue,
 	?string $placeholder = '') : string {
	
	return <<<EOT
<input type="$type" 
id="$id" 
name="$id" class="form-control" 
placeholder="$placeholder" 
value="$oldValue"/>
EOT;

}

private function getHTMLTextarea( 
 	string $id,
 	string $oldValue,
 	?string $placeholder = '') : string {
	
	return <<<EOT
<textarea name="$id" class="form-control" placeholder="$placeholder">$oldValue</textarea>
EOT;

 }



}