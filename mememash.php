<?php
/* MemeMash Version: 2.0 */

include('mysql.php'); //ouverture dossier contenant infos bdd (mdp, user, server ...)
include('functions.php'); //ouverture fichier fonctions calcul de score win/loss de mememash

$query = "SELECT * FROM images ORDER BY RAND() LIMIT 0,2"; // execution requete a la bdd pour selectionner 2 images random en fonction de leur id
$result = mysqli_query($con,$query); //Afficher le resultat de la selection depuis le connecteur (con) de la bdd et depuis le questionnement

while($row = mysqli_fetch_object($result)) { // tant que la bdd retourne des resultats, alors
	$images[] = (object) $row; //retourne les résultats sous forme d'objet dont les attributs représentent les images trouvées
}

mysqli_close($con); // Fermer connection au connecteur (con) de la bdd

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="fixed" lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- évite le redimensionnement automatique de la mise en page -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="description" content="MemeMash">
		<meta name="robots" content="noindex, nofollow">
			<link rel="icon" type="image/x-icon" href="./favicon.ico" />
			<link rel="stylesheet" type="text/css" href="css/mememash.css" />
			<link rel="stylesheet" type="text/css" href="css/style.css" />
			<link rel="stylesheet" type="text/css" href="css/navigation.css" />
			<link rel="stylesheet" type="text/css" href="css/responsive.css" />
			<script type="text/javascript" src="js/navigation.js"></script>
		<title>MemeMash</title>
	</head>
	<body class="fix grey">
	
	<!-- Inclusion du menu -->
		<?php include("menu.php"); ?>

	<!-- Page restante après menu -->
		<div class="page" style="margin-left:300px">

	<!-- Réduire la taille pour les petits écrans -->
		<div class="hide-large" style="margin-top:100px"></div>
	
	<!-- Elements contenus dans la page -->
			<div class="mememash light-grey">
			<h2>QUI GAGNERA ?<br />Clic pour choisir</h2>
			
			<!-- corps du site -->
			<div id="mememashbody">
			
				<!-- div gauche redirige vers ouverture fonction winner pour cette image [0] et loser pour l'autre image [1] -->
				<div id="imagegauche" onclick="window.location='rate.php?winner=<?php print($images[0]->image_id); ?>&loser=<?php print($images[1]->image_id); ?>';">
					<p class="stats">
						<?php print($images[0]->wins); ?> <img src="./mini/upvote.png" alt="Victoires"/> | 
						<?php print($images[0]->losses); ?> <img src="./mini/downvote.png" alt="Défaites"/> | 
						<?php print(round(expected($images[1]->score, $images[0]->score), 4)); ?> <img src="./mini/pourcent.png" alt="Probabilité de gagner"/> | 
						<?php print($images[0]->score); ?> <img src="./mini/trophee.png" alt="Score"/>
					</p>
						<img src="images/<?php print($images[0]->filename); ?>" alt="Image de gauche"/>
				</div>
				
				<!-- div droit redirige vers ouverture fonction winner pour cette image [1] et loser pour l'autre image [0] -->
				<div id="imagedroite" onclick="window.location='rate.php?winner=<?php print($images[1]->image_id); ?>&loser=<?php print($images[0]->image_id); ?>';">
					<p class="stats">
						<?php print($images[1]->wins); ?> <img src="./mini/upvote.png" alt="Victoires"/> | 
						<?php print($images[1]->losses); ?> <img src="./mini/downvote.png" alt="Défaites"/> | 
						<?php print(round(expected($images[0]->score, $images[1]->score), 4)); ?> <img src="./mini/pourcent.png" alt="Probabilité de gagner"/> | 
						<?php print($images[1]->score); ?> <img src="./mini/trophee.png" alt="Score"/>
					</p>
						<img src="images/<?php print($images[1]->filename); ?>" alt="Image de droite"/>
				</div>
				
			</div>
				<p class="legende"> 
					<img src="./mini/upvote.png" alt="Victoires"/> : Victoires | 
					<img src="./mini/downvote.png" alt="Défaites"/> : Défaites |
					<img src="./mini/pourcent.png" alt="ELO performance"/> : Probabilité de gagner |
					<img src="./mini/trophee.png" alt="Score"/> : Score 
				</p>
			</div>
		</div>
	</body>
</html>