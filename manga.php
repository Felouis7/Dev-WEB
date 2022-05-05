<!doctype HTML>





<?php
// Code PHP pour afficher le résultat dans ma page reception.php 
echo $_GET['cat'];
?>

<head>
	<title>MangaShop - Mangas</title>
	<script src="js/books.js"></script>
	<script src="js/hide.js"></script>
	<script src="js/zoom.js"></script>
	<script src="js/header.js"></script>
	<link href="css/Pageprincipale34.css" type=" text/css" rel="stylesheet">
	<link href="css/booter.css" type=" text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Luckiest+Guy">
	<link rel="icon" type="image/png" sizes="16x16" src="./images/logo.ico">

	<style>
		body {
			background-image: url("https://rare-gallery.com/fullwalls/89276-Pain-Naruto-Yahiko-Naruto.png");
		}
	</style>
</head>

<body>

	<?php include "header.php" ?>


	<div class="tout" id="market">
		<div class="container">
			<h1>Nos mangas <button onclick="HideStock()" type="button" class="btn" value="Afficher le stock">Afficher/Cacher le stock</button></h1>
			<div class="wrapper">
				<div class="col">
					<div class="box">
						<div class="all">
							<div class="box3">
								<div class="titre">
									<p>
										<script>
											document.write(books[0].name);
										</script>
									</p>
								</div>
							</div>
							<div class="text-center">
								<img src="https://images-na.ssl-images-amazon.com/images/I/91t7YlWwGfL.jpg" onclick="onClick(this)" class="modal-hover-opacity">
							</div>
							<div class="box2">
								<div class="contenu1">
								</div>
							</div>
							<div id="stock1" class="box2 stock">
								<div class="contenu1">
									<p class="text-center">
										Stock : <script>
											document.write(books[0].stock);
										</script>
									</p>
								</div>
							</div>
							<div class="box2">
								<div class="contenu1">
									<p class="text-center">
										<script>
											document.write(books[0].price);
										</script>€
									</p>
									<input class="btn" type="submit" value="-" id="dec1" onclick="decNumber(1)" />
									<label class="text-center" id="display1">0</label>
									<input class="btn" type="submit" value="+" id="inc1" onclick="incNumber(me1,1)" />

								</div>
							</div>
						</div>
						<form onsubmit="addPanier(1)" method="POST" class="text-center" id="addcart">
							<input class="btn2" type="submit" value="Ajouter au panier" />
						</form>
					</div>
				</div>
				<div class="col">
					<div class="box">
						<div class="all">
							<div class="box3">
								<div class="titre">
									<p>
										<script>
											document.write(books[1].name);
										</script>
									</p>
								</div>
							</div>
							<div class="text-center">
								<img src="https://images-na.ssl-images-amazon.com/images/I/918Ai9a893L.jpg" onclick="onClick(this)" class="modal-hover-opacity">
							</div>
							<div class="box2">
								<div class="contenu1">
								</div>
							</div>
							<div id="stock2" class="box2 stock">
								<div class="contenu1">
									<p class="text-center">
										Stock : <script>
											document.write(books[1].stock)
										</script>
									</p>
								</div>
							</div>
							<div class="box2">
								<div class="contenu1">
									<p class="text-center">
										<script>
											document.write(books[1].price);
										</script>€
									</p>
									<input class="btn" type="submit" value="-" id="dec2" onclick="decNumber(2)" />
									<label class="text-center" id="display2">0</label>
									<input class="btn" type="submit" value="+" id="inc2" onclick="incNumber(me2,2)" />
								</div>
							</div>
						</div>
						<form onsubmit="addPanier(2)" method="POST" class="text-center" id="addcart">
							<input class="btn2" type="submit" value="Ajouter au panier"></input>
						</form>
					</div>
				</div>
				<div class="col">
					<div class="box">
						<div class="all">
							<div class="box3">
								<div class="titre">
									<p>
										<script>
											document.write(books[2].name);
										</script>
									</p>
								</div>
							</div>
							<div class="text-center">
								<img src="INSERT INTO produits(id,nom, stock,image,prix,quantité)
VALUES (1," One Piece Tome 2",6, "https://images-na.ssl-images-amazon.com/images/I/918Ai9a893L.jpg" ,5.49, 6); onclick="onClick(this)" class="modal-hover-opacity">
							</div>
							<div class="box2">
								<div class="contenu1">
								</div>
							</div>
							<div id="stock3" class="box2 stock">
								<div class="contenu1">
									<p class="text-center">
										Stock : <script>
											document.write(books[2].stock)
										</script>
									</p>
								</div>
							</div>
							<div class="box2">
								<div class="contenu1">
									<p class="text-center">
										<script>
											document.write(books[2].price);
										</script>€
									</p>
									<input class="btn" type="submit" value="-" id="dec3" onclick="decNumber(3)" />
									<label class="text-center" id="display3">0</label>
									<input class="btn" type="submit" value="+" id="inc3" onclick="incNumber(me3,3)" />
								</div>
							</div>
						</div>
						<form method="POST" class="text-center" id="addcart">
							<input class="btn2" type="submit" value="Ajouter au panier"></input>
						</form>
					</div>
				</div>
				<div class="col">
					<div class="box">
						<div class="all">
							<div class="box3">
								<div class="titre">
									<p>
										<script>
											document.write(books[3].name);
										</script>
									</p>
								</div>
							</div>
							<div class="text-center">
								<img src="https://images-na.ssl-images-amazon.com/images/I/913wc4EdSlL.jpg" onclick="onClick(this)" class="modal-hover-opacity">
							</div>
							<div class="box2">
								<div class="contenu1">
								</div>
							</div>
							<div id="stock4" class="box2 stock">
								<div class="contenu1">
									<p class="text-center">
										Stock : <script>
											document.write(books[3].stock)
										</script>
									</p>
								</div>
							</div>
							<div class="box2">
								<div class="contenu1">
									<p class="text-center">
										<script>
											document.write(books[3].price);
										</script>€
									</p>
									<input class="btn" type="submit" value="-" id="dec4" onclick="decNumber(4)" />
									<label class="text-center" id="display4">0</label>
									<input class="btn" type="submit" value="+" id="inc4" onclick="incNumber(me4,4)" />
								</div>
							</div>
						</div>
						<form method="POST" class="text-center" id="addcart">
							<input class="btn2" type="submit" value="Ajouter au panier"></input>
						</form>
					</div>
				</div>
				<div class="col">
					<div class="box">
						<div class="all">
							<div class="box3">
								<div class="titre">
									<p>
										<script>
											document.write(books[4].name);
										</script>
									</p>
								</div>
							</div>
							<div class="text-center">
								<img src="https://images-na.ssl-images-amazon.com/images/I/9161teLdxwL.jpg" onclick="onClick(this)" class="modal-hover-opacity">
							</div>
							<div class="box2">
								<div class="contenu1">
								</div>
							</div>
							<div id="stock5" class="box2 stock">
								<div class="contenu1">
									<p class="text-center">
										Stock : <script>
											document.write(books[4].stock)
										</script>
									</p>
								</div>
							</div>
							<div class="box2">
								<div class="contenu1">
									<p class="text-center">
										<script>
											document.write(books[4].price);
										</script>€
									</p>
									<input class="btn" type="submit" value="-" id="dec5" onclick="decNumber(5)" />
									<label class="text-center" id="display5">0</label>
									<input class="btn" type="submit" value="+" id="inc5" onclick="incNumber(me5,5)" />
								</div>
							</div>
						</div>
						<form method="POST" class="text-center" id="addcart">
							<input class="btn2" type="submit" value="Ajouter au panier"></input>
						</form>
					</div>
				</div>
				<div id="modal01" class="modal" onclick="this.style.display='none'">
					<div class="modal-content">
						<img id="img01">
					</div>
				</div>
			</div>
		</div>
		<div class="navcot">

			<a href="manga.php">Mangas</a>
			<a href="figurines.php">Figurines</a>
			<a href="poster.php">Poster</a>
		</div>
	</div>
	<?php include "footer.php" ?>

</body>

</html>