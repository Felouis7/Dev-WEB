<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'produits');

// Connexion à la base de données MySQL

function connect()
{
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME) or die("Connect failed : %s\n" . $conn->error);
    if ($conn === false) {
        die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
    }
    return $conn;
}
