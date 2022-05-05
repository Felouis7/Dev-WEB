<!doctype HTML>
<html>


<head>
    <title>MangaShop - Panier</title>
    <link href="css/Pageprincipale34.css" type=" text/css" rel="stylesheet">
    <link href="css/booter.css" type=" text/css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" src="./images/logo.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Luckiest+Guy">
</head>


<body>
    <?php include "header.php" ?>

    <div class="tout">
        <div class="panier" style="margin-left: 20%;
    margin-right: 20%;">
            <div class="box" style="min-width: 900px;">
                <div class="all">
                    <div class="box3" style="height: 90px;">
                        <div class="titre">
                            <h1 class="text-left" style="margin-left: 20px;
                        margin-top:6px; width: 9em;;">Votre Panier</h1>
                        </div>
                    </div>


                    <div class="box2">
                        <div class="contenu1">
                            <div class="container">
                                <div class="col">
                                    <p class="text-center" style="margin-left: auto;
    margin-right: auto; margin-top:10px; width: 6em;font-family: 'Questrial', sans-serif;">Article : </p>
                                </div>
                                <div class="col">
                                    <p class="text-center" style="margin-left: auto;
    margin-right: auto; margin-top:10px; width: 6em;font-family: 'Questrial', sans-serif;">Quantité : 1 </p>
                                </div>
                                <div class="col">
                                    <p class="text-center" style="margin-left: auto;
    margin-right: auto; margin-top:10px; width: 6em;font-family: 'Questrial', sans-serif;">€</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box4">
                    <div class="titre">
                        <p class="text-right" style="margin-left: 89%; margin-top:10px; width: 6em;font-family: 'Questrial', sans-serif;">
                            Total :€</p>
                    </div>
                </div>
                <!--
        Bouttons pour check out le panier ou le vider
        -->
                <form action="" method="POST" class="text-left" style="margin-left: 3%;
   ; margin-top:10px; width: 6em;font-family: 'Questrial', sans-serif;"><input class="btn" type="submit" value="Vider le panier" style="font-family: 'Questrial', sans-serif;"></input></form>


                <form action="adresse.php" method="POST" class="text-right" style="margin-left: 3%;
    margin-bottom:0%; width: 6em;font-family: 'Questrial', sans-serif;"> <input class="btn" type="submit" value="Payer" style="font-family: 'Questrial', sans-serif;"></input></form>
            </div>
        </div>
    </div>
</body>

<?php include "footer.php" ?>


</html>