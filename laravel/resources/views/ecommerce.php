<?php
// Informations de connexion à la base de données
$hôte = 'localhost';  // Adresse du serveur de la base de données
$ecommerce = 'boitoo';  // Nom de la base de données
$nom_utilisateur = 'root';  // Nom d'utilisateur pour la connexion
$mot_de_passe = '';  // Mot de passe pour la connexion

try {
    // Création d'une connexion PDO (accès à la base de données)
    $pdo = new PDO("mysql:host=$hôte;dbname=$ecommerce;charset=utf8", $nom_utilisateur, $mot_de_passe);
    // Définir l'attribut pour afficher les erreurs en cas de problème
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // En cas d'erreur de connexion, afficher un message d'erreur
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>


