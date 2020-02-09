<?php
/* MemeMash Version: 2.0 */

include('mysql.php'); //ouverture dossier contenant infos bdd (mdp, user, server ...)
include('functions.php'); //ouverture fichier fonctions calcul de score win/loss de mememash

$top10="SELECT *, ROUND(score/(1+(losses/wins))) AS performance FROM images ORDER BY ROUND(score/(1+(losses/wins))) DESC LIMIT 0,10"; //selectionne tous les performances des images en fonction du calcul de score, et les classent dans l'ordre de 1 a 10
$result = mysqli_query($con,$top10); //afficher le resultat depuis le connecteur (con) de la bdd et depuis le questionnement top10
while($row = mysqli_fetch_object($result)) // tant que la bdd retourne des resultats, alors
	$top_ratings[] = (object) $row; //retourne les résultats sous forme d'objet dont les attributs représentent les top classements trouvés

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
		<title>MemeMash - Leaderboard</title>
	</head>
	<body class="fix grey">
	
	<!-- Inclusion du menu -->
		<?php include("menu.php"); ?>

	<!-- Page restante après menu -->
		<div class="page" style="margin-left:300px">

	<!-- Réduire la taille pour les petits écrans -->
		<div class="hide-large" style="margin-top:100px"></div>
	
	<!-- Elements contenus dans la page -->
			<div class="leaderboard light-grey">
			
			<h2>LES PLUS POPULAIRES</h2>
			<div id="mememashbody">
				<div class="Table">
					<div class="TableBody">
						<div class="TableRow">
						<!-- obtenir images top10 -->
							<?php foreach($top_ratings as $key => $image) : ?>
							<div class="TableCell"><img class="top10" src="images/<?=$image->filename?>" alt="TOP 10" width="70" /></div>
							<?php endforeach ?>
						</div>
						<div class="TableRow">
						<!-- obtenir perfs top10 -->
							<?php foreach($top_ratings as $key => $image) : ?>
							<div class="TableCell"><?=$image->performance?> <img class="score" src="./mini/performance.png" alt="ELO performance"/></div>
							<?php endforeach ?>
						</div>
						<div class="TableRow">
						<!-- obtenir scores top10 -->
							<?php foreach($top_ratings as $key => $image) : ?>
							<div class="TableCell"><?=$image->score?> <img class="score" src="./mini/trophee.png" alt="Score"/></div>
							<?php endforeach ?>
						</div>
						<div class="TableRow">
						<!-- obtenir victoires top10 -->
							<?php foreach($top_ratings as $key => $image) : ?>
							<div class="TableCell"><?=$image->wins?> <img class="score" src="./mini/upvote.png" alt="Victoires"/></div>
							<?php endforeach ?>
						</div>
						<div class="TableRow">
						<!-- obtenir defaites top10 -->
							<?php foreach($top_ratings as $key => $image) : ?>
							<div class="TableCell"><?=$image->losses?> <img class="score" src="./mini/downvote.png" alt="Défaites"/></div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
				<p class="legende">
					<img src="./mini/trophee.png" alt="Score"/> : Score <a href="apropos.php" style="color:#fff">Elo</a> | 
					<img src="./mini/performance.png" alt="ELO performance"/> : Performance | 
					<img src="./mini/upvote.png" alt="Victoires"/> : Victoires | 
					<img src="./mini/downvote.png" alt="Défaites"/> : Défaites
				</p>
			</div>
		</div>
	</body>
</html>
