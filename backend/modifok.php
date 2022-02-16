<?php require '../header.php';
require "startbd.php";
bd();

require_once 'Utilisateurs.php';

$entry = Utilisateurs::retrieveByPK($_GET['id']);
?>

<?php
echo "<br/><br/>";

$entry->nom = $_POST['nom'];
$entry->prenom = $_POST['prenom'];
$entry->motdepasse = $_POST['password'];
$entry->email = $_POST['mail'];
$entry->age = $_POST['age'];
$entry->save();
?>
<p style='color: blue;'>Modification(s) réussie(s) !</p>
<br/><br/>
<a href="liste_utilisateur.php">Retour sur la liste d'utilisateurs</a>

<?php require '../footer.php' ?>

