<?php
// On démarre la session sur cette page
session_start();
?>
<!DOCTYPE html>
<html lang="fr"> <!-- Correction de l'attribut lang pour le français -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="connexion.css">
</head>
<body>
<?php
// Ensuite, on affiche le contenu de la variable session
// Ajout d'une vérification pour s'assurer que la variable 'email' est définie
 
    echo "<p class='message'> Ravis de vous revoir " .  $_SESSION['email'] ; "</p>"
    ?>
</body>
</html>

