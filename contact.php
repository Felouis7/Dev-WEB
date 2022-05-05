<!DOCTYPE html>
<!--
Formulaire pour mettre l'adresse avant le paiement 
-->
<html>


<head>

	<link href="css/inscription.css" rel="stylesheet" type="text/css">
	<link href="css/Pageprincipale34.css" rel="stylesheet" type="text/css">
	<link href="css/booter.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Luckiest+Guy">
	<script type="text/javascript" src="inscription.js"> </script>
	<title>MangaShop - Contactez-nous</title>
	<link rel="icon" type="image/png" sizes="16x16" src="./images/logo.ico">
	<style>
		body {
			background-image: url(./images/murasakibara.jpg);
			overflow-y: auto;
		}

		input:invalid {
			box-shadow: 3px 3px 3px #df82c9;
		}
	</style>
</head>

<body>
	<?php include "header.php" ?>

	<div class="tout" id="contact-column">
		<h1 id="ctnbtn">Contactez-nous !</h1>
		<form action="mailto:declairval@cy-tech.fr" method="POST" onsubmit="check()" class="whatsapp-form">
			<div class="datainput">
				<input class="validate" name="name" required type="text" />
				<span class="highlight"></span><span class="bar"></span>
				<label>Nom</label>
			</div>
			<div class="datainput">
				<input class="validate" name="prenom" required type="text">
				<span class="highlight"></span><span class="bar"></span>
				<label>Prénom</label>
			</div>
			<div class="datainput">
				<input class="validate" id="birthdate" name="birthdate" required type="date" max="2015-01-01" />
				<span class="highlight"></span><span class="bar"></span>
				<label style="margin-left:20%;">Date de naissance</label>
			</div>
			<label>Sexe</label>
			<div class="dataradio">
				<input class="validate" name="Sexe" required type="radio" />
				<label for="Sexe">Homme</label>
			</div>

			<div class="dataradio">
				<input class="validate" name="Sexe" required type="radio" />
				<label for="Sexe">Femme</label>
			</div>

			<div class="datainput">
				<input class="validate" name="name" required type="text" />
				<span class="highlight"></span><span class="bar"></span>
				<label>Votre commentaire</label>
			</div>
			<input class="send_form" type="submit" value="Envoyer"></input>

			<div id="text-info"></div>
		</form>
	</div>

	<?php include "footer.php" ?>

</body>

</html>