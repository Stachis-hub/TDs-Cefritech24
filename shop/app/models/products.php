<?php
//Exemple d'architecture MVC en PHP par eliseekn -> 59434291/43403398 - eliseekn@gmail.com

//on charge le fichier mère du modèle
require "app/core/model.php";

//classe ProductsModel instanciée de la classe Model
class ProductsModel extends Model {

	protected String $pName;
    protected int $qte;
    protected String $cDate;

	

	public function getPName() : String {
		return $this->pName;
	}

	public function setPName(String $value) {
		$this->pName = $value;
	}

	public function getQte() : int {
		return $this->qte;
	}

	public function setQte(int $value) {
		$this->qte = $value;
	}

	public function getCDate() : String {
		return $this->cString;
	}

	public function setCDate(String $value) {
		$this->cString = $value;
	}

    //initialisation de la classe
	public function __construct() {
		parent::__construct();
	}

    //on récupère la liste des produits de la base de données
	public function get_products() {
		return $this->select("SELECT * FROM products");
	}

    //on insère un produit dans la base de données
	public function add_products(ProductsModel $p) {
		$name = $p->getPName();
		$cdate = $p->getCDate();
		$qte = $p->getQte();
		$this->execute("INSERT INTO products (pname, qte, cdate) 
		VALUES ($name, $qte, $cdate)");
	}

    //on met à jour un produit de la base de données
	public function upString_products($old_product, $new_product) {
		$this->execute("UPString products SET product='$new_product' WHERE product='$old_product'");
	}

    //on supprime un produit de la base de données
	public function delete_products($product) {
		$this->execute("DELETE FROM products WHERE product='$product' LIMIT 1");
	}
}
?>