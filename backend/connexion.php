<?php
if ($_POST==null) {
    header('location: identification.php');
    die;
}
?>

<?php include "../header.php"; ?>
<?php

// // afficher les données envoyés par l utilisateur
// var_dump($_POST);

// // obj : vérifier si ces données sont juste par rapport à ce que j'ai en base

// // recuperer en base les données correspondant à l'utilisateur

// // que je puisse dire OK tu est connecté 

// //ou non tu reviens à la page précédente

// // 1. Connecte BD 
// $conn = new mysqli('127.0.0.1', 'root', 'root');
// // var_dump($conn);
// if ($conn->connect_error)
//   die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

// // 2. Recuperer l utilisateur souhaité
// require "SimpleOrm.class.php";
// SimpleOrm::useConnection($conn, 'coursphp');
require "startbd.php";

bd();

require_once "Utilisateurs.php";


// Variables POST
$emailUtilLog=$_POST['mail'];
$mdpUtilLog=$_POST['password'];

$entry = Utilisateurs::retrieveByEmail($_POST['mail'], SimpleOrm::FETCH_ONE);



// var_dump($entry);
// dans le cas ou on ne trouve pas d'utilisateur avec le nom envoyé en POST alors erreur

if ($entry==null){
    die ('<br/><br/><p>*** Vous n'."'".'êtes pas encore inscrit *** Vous pouvez accéder à l'."'".'inscription sur le lien situé en haut de la page à droite ou <a href="inscription.php" style="text-decoration: none;">ici</a></p>');
}


// 3. comparer les données SI POST['nom']==entry->prenom && .. alors OK

// Variable B.D.
$emailUtilTable=$entry->email;
$nomUtilTable=$entry->nom;
$prenomUtilTable=$entry->prenom;
$mdpUtilTable=$entry->motdepasse;

if (($emailUtilLog==$emailUtilTable) && (password_verify($mdpUtilLog, $mdpUtilTable))) {
    echo "<br/><br/><p>Bonjour, ".$prenomUtilTable." ".$nomUtilTable." ! Vous pouvez accéder aux cours <a href=../index.php>PHP</a></p>";
    $_SESSION['user']=$_POST['mail'];
    $_SESSION['name']="$prenomUtilTable $nomUtilTable";
}
else if ($emailUtilLog!=$emailUtilTable) {
    echo '<br/><br/><p style="color: red;">Identifiant de connexion invalide.</p>';
    echo "<br/><br/>"."Veuillez vous reconnecter ".' <button><a href="../index.php" style="text-decoration: none;">Retour à la connexion</a></button>';
}    
else {
    echo '<br/><br/><p style="color: red;">Mot de passe invalide.</p>';
    echo "<br/><br/>"."Veuillez vous reconnecter ".' <button><a href="../index.php" style="text-decoration: none;">Retour à la connexion</a></button>';
    

}
?>
<br/>
<br/>
<br/>
<?php 
    // var_dump($_SESSION);
?>

<?php include "../footer.php"; ?>