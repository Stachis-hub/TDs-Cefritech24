<?php
//Exemple d'architecture MVC en PHP par eliseekn -> 59434291/43403398 - eliseekn@gmail.com

//on charge le fichier mère du controlleur
require "app/core/controller.php";

//classe AboutController instanciée de la classe Controlleur
class AboutController extends Controller {

    //initialisation de la classe
	public function __construct() {
		parent::__construct();
	}

    //on affiche la page about avec une variable title définie
	public function index() {
		$this->view->render("about", ["title" => "Architecture MVC en PHP - A propos"]);
	}
}
?>
