<?php
// Vérifiez si le paramètre id est spécifié dans l'URL.  
if (isset($_GET['id'])) {
    // Pour éviter toute injection SQL, préparez l'instruction et exécutez-la.  
    $stmt = $pdo->prepare('SELECT * FROM produits WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    /*  Récupérer le produit de la base de données et retourner le résultat sous forme de tableau.*/
    $produit = $stmt->fetch(PDO::FETCH_ASSOC);
    /* Vérifiez si le produit existe (le tableau n'est pas vide)*/
    if (!$produit) {
        /*Erreur simple à afficher si l'id du produit n'existe pas (le tableau est vide)*/
        exit('le produit n\'existe pas!');
    }
} else {
    //  Erreur simple à afficher si l'id n'a pas été spécifié.  
    exit('le produit n\'existe pas!');
}
