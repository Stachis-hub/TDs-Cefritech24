<?php

//chaîne de connexion à la base de données
$con = mysqli_connect("localhost", "root", "", "school");

//Vérifier si la connexion a réussie
if ($con) {

}else {
    die('connexion échouée'.mysqli_connect_error());
}
?>