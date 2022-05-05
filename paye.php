<!DOCTYPE html>
<html>




<head>
	<link rel="icon" type="image/png" sizes="16x16" src="./images/logo.ico">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
	<link href="css/inscription.css" rel="stylesheet" type="text/css">
	<link href="css/Pageprincipale34.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Luckiest+Guy">
	<script type="text/javascript" src="inscription.js"> </script>
	<title>MangaShop - Paiement</title>
	<style>
		body {
			background-image: url("https://wallpaperaccess.com/full/5718671.jpg");
		}
	</style>
</head>

<body>
	<?php include "header.php" ?>

	<h1 style="	font-size: 40pt;font-family: 'Luckiest Guy';color: #fff;-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-shadow:   0px -6px 0 #2c2c2c,  
				   0px -6px 0 #2c2c2c,
				   0px  6px 0 #2c2c2c,
				   0px  6px 0 #2c2c2c,
				  -6px  0px 0 #2c2c2c,  
				   6px  0px 0 #2c2c2c,
				  -6px  0px 0 #2c2c2c,
				   6px  0px 0 #2c2c2c,
				  -6px -6px 0 #2c2c2c,  
				   6px -6px 0 #2c2c2c,
				  -6px  6px 0 #2c2c2c,
				   6px  6px 0 #2c2c2c,
				  -6px  18px 0 #2c2c2c,
				   0px  18px 0 #2c2c2c,
				   6px  18px 0 #2c2c2c,
				   0 19px 1px rgba(0,0,0,.1),
				   0 0 6px rgba(0,0,0,.1),
				   0 6px 3px rgba(0,0,0,.3),
				   0 12px 6px rgba(0,0,0,.2),
				   0 18px 18px rgba(0,0,0,.25),
				   0 24px 24px rgba(0,0,0,.2),
				   0 36px 36px rgba(0,0,0,.15);
				   margin: 20px;font-family: 'Luckiest Guy';margin-top:9%;display: flex;justify-content: center;margin-right: 380px;">
		Paiement</h1>
	<form action="formpayshop.php" method="POST" onsubmit="return check()" class="whatsapp-form">
		<div class="datainput">
			<input class="validate" name="cardnum" required="" type="number" oninvalid="this.setCustomValidity('Veuillez entrer un numéro de carte valide')" oninput="this.setCustomValidity('')" max="9999999999999999" />
			<span class="highlight"></span><span class="bar"></span>
			<label>Numéro de carte </label>
		</div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="datainput">
						<input class="validate" name="expi" required="" type="month" />
						<span class="highlight"></span><span class="bar"></span>
						<label></label>
					</div>
				</div>
				<div class="col">
					<div class="datainput">
						<input class="validate" name="CVV" oninvalid="this.setCustomValidity('Veuillez entrer un CVV valide')" oninput="this.setCustomValidity('')" type="number" max="999" />
						<span class="highlight"></span><span class="bar"></span>
						<label>CVV</label>
					</div>
				</div>
			</div>
		</div>
		<input class="send_form" type="submit" value="Payer"></input>
		<div id="text-info"></div>
	</form>
	<?php include "footer.php" ?>

</body>

</html>