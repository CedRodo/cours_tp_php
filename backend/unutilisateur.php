<?php include "header.php"; ?>

<?php
// Connecter à la base d


// 1. Connecte BD 
bd();

require_once "Utilisateurs.php";

// recuperer l ensemble des données des utilisateurs
$entry = Utilisateurs::retrieveByPK($_GET['id']);
 
echo $entry->nom;
// Recuperer l'ensemble des donnes de la tables utilisateurs
?>
<?php include "footer.php"; ?>