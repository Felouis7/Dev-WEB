<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MangaShop - Accueil</title>
    <link href="css/Pageprincipale34.css" rel="stylesheet">
    <link href="css/booter.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Luckiest+Guy">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <style>
        body {
            background-image: url("https://wallpaperaccess.com/full/3628650.jpg")
        }
    </style>

</head>

<body>
    <?php include "header.php" 
    ?>

    <div class="main-wrapper">
        <div class="card" onclick="location.href='manga.php';">
            <h1>Bienvenue chez MangaShop !
            </h1>
            <div class="desc">
                Sur notre site, vous pourrez retrouver de nombreux articles en lien avec l'univers de la
                pop culture : mangas, figurines,
                posters... Le tout importé du Japon et disponible à la vente en direct !
                Passez un bon moment en notre compagnie.
                <div class="arigato">どうもありがとう !</div>
                <figcaption>Merci beaucoup !</figcaption>
            </div>
        </div>
        <div class="quote">
            <blockquote>
                "七 転び 八 起き"
            </blockquote>
            <figcaption>
                - Les échecs conduisent au succès.
            </figcaption>
        </div>
    </div>

    <?php include "footer.php" ?>

</body>


</html>