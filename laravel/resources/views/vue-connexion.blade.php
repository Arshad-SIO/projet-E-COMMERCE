<?php
session_start();
require_once 'config/ecommerce.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];
    
    
    $requete = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = ?"); // Préparation de la requête pour récupérer un utilisateur à partir de son email
    $requete->execute([$email]);    // Exécution de la requête en passant l'email comme paramètre
    $utilisateur = $requete->fetch(); // Récupération du résultat de la requête (l'utilisateur correspondant à l'email)
    
    if ($utilisateur && password_verify($motdepasse, $utilisateur['motdepasse'])) {
        $_SESSION['utilisateur'] = $utilisateur;
        header('Location: index.php');
        exit();
    } else {
        $erreur = "Email ou mot de passe incorrect";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Boitoo</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Connexion</h2>
        <?php if (isset($erreur)): ?>
            <div class="error"><?php echo $erreur; ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mot_de_passe">Mot de passe</label>
                <input type="mot_de_passe" id="mot_de_passe" name="mot_de_passe" required>
            </div>
            <button type="submit">Se connecter</button>
        </form>
        <p>Pas encore de compte ? <a href="inscription.php">S'inscrire</a></p>
    </div>
</body>
</html>