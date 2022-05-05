<!DOCTYPE html>
<html>

<?php include "header.php" ?>

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
    <?php
    require('config.php');
    session_start();
    $conn = connect();
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $query = "SELECT * FROM `users` WHERE username='$username' 
        and password='$password'" . hash('sha256', $password) . "";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            $user = mysqli_fetch_assoc($result);
            // vérifier si l'utilisateur est un administrateur ou un utilisateur
            header('location: index.php');
        } else {
            $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
        }
    }
    ?>
    <form class="box" action="" method="post" name="login">
        <h1 class="box-title">Connexion</h1>
        <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
        <input type="password" class="box-input" name="password" placeholder="Mot de passe">
        <input type="submit" value="Connexion " name="submit" class="box-button">
        <p class="box-register">Vous êtes nouveau ici?
            <a href="register.php">S'inscrire</a>
        </p>
        <?php if (!empty($message)) { ?>
            <p class="errorMessage"><?php echo $message; ?></p>
        <?php } ?>
    </form>
</body>

</html>