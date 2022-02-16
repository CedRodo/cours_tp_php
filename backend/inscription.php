<?php include "../header.php"; ?>
 

<?php

// var_dump($_POST);
if ( (isset($_POST['prenom'])==true) && 
     (isset($_POST['mail'])==true) &&
     (isset($_POST['nom'])==true) &&
     (isset($_POST['password'])==true) && 
     (isset($_POST['age'])==true) )
    
    {
      // Contrôle que tout est cohérent côté POST : Valeur présente...
     $mdp=password_hash($_POST['password'], PASSWORD_BCRYPT);
     
     
      
      // Connexion BD
      require "startbd.php";
      bd();
      // Insertion BD
      
        require_once "Utilisateurs.php";

        $entry = new Utilisateurs;
        $entry->prenom = $_POST['prenom'];
        $entry->nom = $_POST['nom'];
        $entry->motdepasse = $mdp;
        $entry->email = $_POST['mail'];
        $entry->age = $_POST['age'];
        $entry->save();
        
        // on va créé une session pour le nouvel inscrit déjà connecté.
        $_SESSION['user']= $entry->email;
        $_SESSION['name']= $entry->prenom." ".$entry->nom;



    }


if ( isset($_SESSION['user'])==false){
  ?>

<?php $_GET['mode']='sub'; require 'formulaire.php'; ?>
 <?php
}
else { ?>
  <p style='color: green;'>Vous êtes connecté.</p>
  <p>Cliquer <a href="../index.php">ici</a> pour rejoindre l'accueil.</p>
<?php } ?>


<?php include "../footer.php"; ?>