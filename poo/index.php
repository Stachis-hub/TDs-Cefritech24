<?php
require 'Personnage.php';
require 'PersonnagesManager.php';

$values = array(
    'nom' => 'Blanche',
    'forcePerso' => 1,
    'degats' => 99,
    'niveau' => 1,
    'experience' => 0
);
$perso = new Personnage();
$db = new PDO('mysql:host=localhost;dbname=tests', 'root', '');
$perso->hydrate($values);
$manager = new PersonnagesManager($db);
var_dump($perso);
$manager->add($perso);
?>
