<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/monsite/coursphp/assets/logophp.png">
    <link rel="stylesheet" href="http://localhost/monsite/coursphp/assets/style.css" />

    <title>Cours PHP</title>
</head>
<body>
    <div style="text-align: end;">
    <br />
    <p class="headerLog" style="font-size: 18px;"> <img src="http://localhost/monsite/coursphp/assets/login.png" alt="se connecter"> <a href="http://localhost/monsite/coursphp/backend/connexion.php">Connexion</a>  <img src="http://localhost/monsite/coursphp/assets/inscription.png" alt="s'inscrire"> <a href="http://localhost/monsite/coursphp/backend/inscription.php">Inscription</a> </p> 
    
    <?php
     if (isset($_SESSION['name'])==true) { ?>
        <br/>
        <br/>
        <p class="headerLog" style="font-size: 18px;"> <img src="http://localhost/monsite/coursphp/assets/user.png" alt="nom de l'utilisateur"> Bonjour <?php echo $_SESSION['name'];?> <img src="http://localhost/monsite/coursphp/assets/logout.png" alt="se déconnecter"> <a href="http://localhost/monsite/coursphp/backend/deconnexion.php">Déconnexion</a> <a href="liste_utilisateur.php">Liste des utilisateurs</a>
         <?php
     }
     else { ?>
        <br/><br/><p class="headerLog" style="font-size: 18px;"> Vous n'êtes pas connecté<br/>
    <?php } ?>
     </div>
<header>
    <nav>  
    <a href="http://localhost/monsite/coursphp/index.php">ACCUEIL </a> | <a href="http://localhost/monsite/coursphp/cours.php"> COURS </a> | <a href="http://localhost/monsite/coursphp/bonjour.php"> BONJOUR </a> | <a href="http://localhost/monsite/coursphp/etoiles.php"> CARRE D'ÉTOILES </a> | <a href="tablemulti.php"> TABLE DE MULTIPLICATION </a> | <a href="http://localhost/monsite/coursphp/somme.php"> SOMME D'UNE SUITE </a> | <a href="http://localhost/monsite/coursphp/factorielle.php"> FACTORIELLE D'UN NOMBRE </a> | <a href="http://localhost/monsite/coursphp/tva.php"> PRIX AVEC TVA </a> | <a href="http://localhost/monsite/coursphp/pairimpair.php"> PAIR OU IMPAIR </a> | <a href="http://localhost/monsite/coursphp/echangevar.php"> ÉCHANGE DE VARIABLES </a> | <a href="http://localhost/monsite/coursphp/tabutil.php"> TABLEAU D'UTILISATEURS </a> | <a href="jeu.php"> JEU DU NOMBRE À DEVINER </a> | <a href="http://localhost/monsite/coursphp/tpphp.php"> TP PHP</a>
    <br/>
    <hr>
    </nav>
</header>