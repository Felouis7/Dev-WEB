<!DOCTYPE html>
<html>



<head>
    <link href="css/inscription.css" rel="stylesheet" type="text/css">
    <link href="css/Pageprincipale34.css" rel="stylesheet" type="text/css">
    <link href="css/booter.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Luckiest+Guy">
    <script type="text/javascript" src="inscription.js"> </script>
    <title>MangaShop - Connexion</title>
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

<?php include "header.php" ?>
<?php include "config.php" ?>

<body>
    <?php
    $conn = connect();
    if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])) {
        // récupérer le nom d'utilisateur
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);
        // récupérer l'email 
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($conn, $email);
        // récupérer le mot de passe 
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);

        $query = "INSERT into `users` ( `username`,`email`, `password`)
        VALUES ('$username','$email', '" . hash('sha256', $password) . "')";
        $res = $conn->query($query);
        if ($res) {
            echo "<div class='sucess'> <h3>Vous êtes inscrit avec succès.</h3> <p>Cliquez ici pour continuer vos achats <a href='manga.php'>continuer</a></p> </div>";
        }
    } else {
        echo <<<'START'
         <form class="box" action="" method="post">
            <h1 class="box-title">S'inscrire</h1>
            <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />

            <input type="text" class="box-input" name="email" placeholder="Email" required />

            <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />

            <input type="submit" name="submit" value="S'inscrire" class="box-button" />

            <p class="box-register">Déjà inscrit?
                <a href="login.php">Connectez-vous ici</a>
            </p>
        </form>
        START;
    }
    ?>
</body>

</html>