<?php
//Connexion a la base de données avec les paramètres suivants
$user		= "x";
$password	= "x";
$database	= "x";
$host		= "x";

$con = mysqli_connect($host,$user,$password,$database); // ouvre une connexion au serveur mysql en simplifiant la ligne d'ouverture par $con
if (!$con) { //Test erreur sur la connexion
    echo "Error: " . mysqli_connect_error(); //Affichage de l'erreur
	exit();
}
?>
