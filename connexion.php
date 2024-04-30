<?php 
// demarrage de la session avant toute chose
session_start();
if(isset($_POST ['bouton'])){ //si on clique sur le bouton valider le programme affiche le message si dessous...
    
    //verification des infos
    
     if (isset($_POST['email']) && isset($_POST['mdp']))
      {
    
    //insertions de l'email et le mot de passe dans les variables
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $erreur = "" ;
    
    // verifions si les informations entreé sont correctes
    // connection a la base de données
    
    $nom_serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $nom_base_données = "connexion";
    $con = mysqli_connect($nom_serveur , $utilisateur , $mot_de_passe , $nom_base_données);
    
    // requete pour selectionner l'utilisateur qui a pour email et mot de passe les identifiants inscrits dans la bd
    
    $req = mysqli_query($con, "SELECT * FROM utilisateur WHERE email = '$email' AND mdp = '$mdp' ");
    $num_ligne = mysqli_num_rows($req) ; 
    
    // compter le nombre de ligne ayant rapport a la requete sql
    if($num_ligne > 0)
    {
        header("Location: bienvenu.php ") ; //si le nombre de ligne est > 0 , on sera redirigé vers la page bienvenu
        // Nous allons créer une variable de type session qui vas contenir l'email de l'utilisateur
        $_SESSION['email']=$email;
        exit();
    } else
    { 
        //si non 
        $erreur ="Adresse Mail ou Mots de passe incorectes !" ;
    }
    
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="stylesheet" href="connexion.css">
</head>
<body>
    <section>
        <h1>connexion </h1>
        <?php
        if(isset($erreur)){
            echo "<p class='erreur'>" .$erreur. "</p>" ;
        }
        ?>
            <form action="" method="post"> <!-- on ne met rien a ce niveau car on veut que le message apparaisse sur la mm page -->
                <label > Adresse Mail </label>
                <input type="text" name="email">
                <label> Mots de passe </label>
                <input type="password" name= "mdp">
                <input type="submit" value= "valider" name="bouton">
            </form>
    </section>
</body>
</html>