<header>
	<div class="logo"><img onclick="location.href='index.html'" src="images/logo1v3.png" />
	</div>
	<div class="nav">
		<a href="index.php">Accueil</a>
		<a href="contact.php"> Contact</a>
		<a href="manga.php"> Boutique</a>
		<?php
		session_start();

		if (!isset($_SESSION['username'])) {
			echo <<<'START'
				<a href="register.php">Insc</a>
				<a href="login.php">Connexion</a>
				START;
		} else {
			echo $_SESSION['username'];
		}

		?>

		<div class="a" onclick="location.href='panier-1.php'"><img src="https://icon-library.com/images/white-shopping-cart-icon-png/white-shopping-cart-icon-png-8.jpg" />
			: 0</div>
</header>