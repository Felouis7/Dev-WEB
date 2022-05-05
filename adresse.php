<!DOCTYPE html>
<!--
Formulaire pour mettre l'adresse avannt le paiement 
-->
<html>

<head>
	<link rel="icon" type="image/png" sizes="16x16" src="./images/logo.ico">
	<link href="css/inscription.css" rel="stylesheet" type="text/css">
	<link href="css/Pageprincipale34.css" rel="stylesheet" type="text/css">
	<link href="css/booter.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Luckiest+Guy">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="inscription.js"> </script>
	<title>MangaShop - Informations</title>
	<style>
		input:invalid {
			box-shadow: 3px 3px 3px #df82c9;
		}

		body {
			background-image: url("https://wallpaperaccess.com/full/5718671.jpg");
		}
	</style>
</head>

<body>
	<?php include "header.php" ?>


	<h1 style="font-family: 'Luckiest Guy';margin-top:9%;display: flex;justify-content: center;margin-right: 240px;">
		Informations</h1>
	<form action="paye.php" method="POST" onsubmit="return check()" class="whatsapp-form">
		<div class="datainput">
			<input class="validate" name="name" required="" type="text" />
			<span class="highlight"></span><span class="bar"></span>
			<label>Nom</label>
		</div>
		<div class="datainput">
			<input class="validate" name="prenom" required="" type="text">
			<span class="highlight"></span><span class="bar"></span>
			<label>Prénom</label>
		</div>
		<div class="datainput">
			<input class="validate" id="wa_email" id="mail" name="email" required="" type="email" />
			<span class="highlight"></span><span class="bar"></span>
			<label>Adresse mail</label>
		</div>
		<div class="datainput">
			<input class="validate" name="adresse" required="" type="text" />
			<span class="highlight"></span><span class="bar"></span>
			<label>Adresse (numéro et rue)</label>
		</div>
		<div class="datainput">
			<input class="validate" name="pays" required="" type="text" />
			<span class="highlight"></span><span class="bar"></span>
			<label>Pays</label>
		</div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="datainput">
						<input class="validate" name="ville" required="" type="text" />
						<span class="highlight"></span><span class="bar"></span>
						<label>Ville</label>
					</div>
				</div>
				<div class="col">
					<div class="datainput">
						<input class="validate" name="codepostal" required="" type="number" max="99999" />
						<span class="highlight"></span><span class="bar"></span>
						<label>Code Postal</label>
					</div>
				</div>
			</div>
		</div>
		<input class="send_form" type="submit" value="Passer au paiement"></input>
		<div id="text-info"></div>
	</form>

	<?php include "footer.php" ?>
</body>



</html>