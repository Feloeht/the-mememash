<?php

include('mysql.php'); // Ouverture fichier de connexion bdd -> permet d'utiliser var $con definie dans mysql.php

if ($handle = opendir('images')) { // Tester fichier images nommé 'images' et ouverture
	/* loop over the directory */
	while (false !== ($file = readdir($handle))) {
		if($file!='.' && $file!='..') {
			$images[] = "('".$file."')";
		}
	}
	closedir($handle);
}
$query = "INSERT INTO images (filename) VALUES ".implode(',', $images)." "; //insertion des images dans la table image de la bdd, 
																			//implode=Rassemble les éléments d'un tableau en une chaîne
if (!mysqli_query($con,$query)) { // Requete var $query sur la bdd $con
	print mysqli_error($con); // Si erreur, affichage erreur
}
else {
	print "finished installing your images!"; // Sinon affichage message succes
}
?>