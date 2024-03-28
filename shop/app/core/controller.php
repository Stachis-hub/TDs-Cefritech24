<?php
//Exemple d'architecture MVC en PHP par eliseekn -> 59434291/43403398 - eliseekn@gmail.com

//on charge les fichiers mères du modèle et de la vue
require "view.php";

//classe mère des controlleurs
class Controller {

    //initialisation de la classe
    public function __construct() {
		$this->view = new View();
    }
}
?>
