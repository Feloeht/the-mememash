<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="fix" lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- évite le redimensionnement automatique de la mise en page -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="description" content="MemeMash">
		<meta name="robots" content="noindex, nofollow">
			<link rel="icon" type="image/x-icon" href="./favicon.ico" />
			<link rel="stylesheet" type="text/css" href="css/style.css" />
			<link rel="stylesheet" type="text/css" href="css/navigation.css" />
			<link rel="stylesheet" type="text/css" href="css/responsive.css" />
			<script type="text/javascript" src="js/navigation.js"></script>
		<title>MemeMash - Contact</title>
	</head>
	<body class="fix grey">
	
	<!-- Inclusion du menu -->
		<?php include("menu.php"); ?>

	<!-- Page restante après menu -->
		<div class="page" style="margin-left:300px">

	<!-- Réduire la taille pour les petits écrans -->
		<div class="hide-large" style="margin-top:100px"></div>
	
	<!-- Elements contenus dans la page -->
			<div class="element light-grey">

				<h2>CONTACT</h2>
				<p>Une question ? Une suggestion ?</p>
				<p>Laissez-nous un message !</p>
					<form method="POST" action="https://formspree.io/theolef77@orange.fr">
						<input type="email" name="email" placeholder="Votre adresse email">
						<textarea name="message" placeholder="Votre message"></textarea>
						<input id="submit" name="submit" type="submit" value="Envoyer">
					</form>
			</div>
		</div>
	</body>
</html>