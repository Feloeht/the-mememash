<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="fix" lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- évite le redimensionnement automatique de la mise en page -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="description" content="MemeMash est un service qui permet à ses utilisateurs de juger l'attractivité d'une image">
        <meta name="keywords" content="MemeMash, Meme, Mash, mememash, mememash.fr, meme, mash, memes, images, droles, Elo, leaderboard, score">
			<link rel="icon" type="image/x-icon" href="./favicon.ico" />
			<link rel="stylesheet" type="text/css" href="css/style.css" />
			<link rel="stylesheet" type="text/css" href="css/navigation.css" />
			<link rel="stylesheet" type="text/css" href="css/responsive.css" />
			<script type="text/javascript" src="js/navigation.js"></script>
		<title>MemeMash</title>
	</head>
	<body class="grey">
	
	<!-- Inclusion du menu -->
		<?php include("menu.php"); ?>

	<!-- Page restante après menu -->
		<div class="page" style="margin-left:300px">

	<!-- Réduire la taille pour les petits écrans -->
		<div class="hide-large" style="margin-top:100px"></div>
	
	<!-- Elements contenus dans la page -->
			<div class="element light-grey">

				<h2>Bienvenue sur MemeMash !</h2>
				<p>mème : nm. élément repris et décliné en masse sur Internet<br>
				Il existe des centaines de milliers de mèmes sur Internet. Nous en avons sélectionné un bon nombre pour te permettre à TOI cher internaute, de prendre part dans leur classement !</p>
				<p>Le principe est simple : deux mèmes te sont proposés, tu cliques sur celui que tu préfères, on s’occupe d’établir un classement et on te propose un tableau révélant les 10 mèmes les plus populaires !</p>
				<p>De plus, tu peux suivre en temps réel le nombre de victoires et de défaites de ceux qui te sont proposés.</p>
				<p>Plus le nombre de votants est élevé, plus les scores de chaque mème seront réalistes, alors n’hésite pas à partager ce site !</p>
				<a href="mememash.php"><button class="bouton" style="vertical-align:middle"><span>C'est parti !</span></button></a>
			</div>
		</div>
	</body>
</html>