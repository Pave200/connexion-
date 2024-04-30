<?php 
//verification des infos

 if (isset($_POST['email']) && isset($_POST['mdp']))
  {

//insertions de l'email et le mot de passe dans les variables
$email = $_POST['email'];
$mdp = $_POST['mdp'];

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
    exit();
} else
{ 
    //si non 
    echo " Adresse Mail ou Mots de passe incorectes !";
}

}