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

<?php include 'header.php' ?>




<body>

    <?php

    $_GET['catégorie'];

    include 'config.php';

    $conn = connect();


    $img;
    $stock;
    $prix;
    $i;
    $nom;

    if ($_GET['catégorie'] == 'manga') {
        $sql = "SELECT catégorie,nom,prix,quantité,img FROM produits WHERE catégorie='manga'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $z = 0;
            while ($row = $result->fetch_assoc()) {
                $nom[$i] = $row["nom"];
                $img[$i] = $row["img"];
                $quantité[$i] = $row["quantité"];
                $prix[$i] = $row["prix"];
                $titre = "Mangas";
                $i = $i + 1;
            }
        }
    }


    if ($_GET['catégorie'] == 'manga') {
        $sql = "SELECT catégorie,nom,prix,quantité,img FROM produits WHERE catégorie='figurine'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $z = 5;
            while ($row = $result->fetch_assoc()) {
                $nom[$i] = $row["nom"];
                $img[$i] = $row["img"];
                $quantité[$i] = $row["quantité"];
                $prix[$i] = $row["prix"];
                $titre = "Mangas";
                $i = $i + 1;
            }
        }
    }

    if ($_GET['catégorie'] == 'manga') {
        $sql = "SELECT catégorie,nom,prix,quantité,img FROM produits WHERE catégorie='poster'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $z = 9;
            while ($row = $result->fetch_assoc()) {
                $nom[$i] = $row["nom"];
                $img[$i] = $row["img"];
                $quantité[$i] = $row["quantité"];
                $prix[$i] = $row["prix"];
                $titre = "Mangas";
                $i = $i + 1;
            }
        }
    }

    ?>

</body>