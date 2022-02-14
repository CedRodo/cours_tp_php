<!-- CREEZ UN FICHIER EN PHP
CONNECTE A LA BD
Puis vous allez afficher vos Utilisateur
afficher L ID 1 l ID 2 ...
Afficher Tout les utilisateurs
Modifier un Utilisateur
Inserer un utilisateurs
Supprimer un utilisateurs


Créez une table article
Puis vous allez afficher vos article
afficher L ID 1 l ID 2 ...
Afficher Tout les article
Modifier un article
Inserer un article
Supprimer un article -->

<?php
$conn = new mysqli('127.0.0.1', 'root', 'root');

if ($conn->connect_error)
  die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

require "SimpleOrm.class.php";
SimpleOrm::useConnection($conn, 'coursphp');
require "Actors.php";

$entry = Actors::all();
var_dump($entry);

// $entry = new Actors;
// $entry->prenom = 'Melki';
// $entry->nom = 'Melki';
// $entry->motdepasse = 'Melki';
// $entry->email = 'Melki';
// $entry->age = 25;
// $entry->save();

// On affiche tous nos utilisateurs

$utilisateur1=Actors::retrieveByPK(1);
echo $utilisateur1->nom." ".$utilisateur1->prenom;
$utilisateur2=Actors::retrieveByPK(2);
echo $utilisateur2->nom." ".$utilisateur2->prenom;

// On modifie un utilisateur son âge et prénom

$utilisateur3 = Actors::retrieveByPK(3);
$utilisateur3 -> age = 12;
$utilisateur3 -> prenom = "Paulo";
$utilisateur3 -> save();

// On insère un nouvel utilisateur

// $nouvUtilisateur = Actors::all();

$nouvUtilisateur = new Actors;
$nouvUtilisateur -> prenom = "Morgan";
$nouvUtilisateur -> nom = "Freeman";
$nouvUtilisateur -> age = 85;
$nouvUtilisateur -> email = "levade@shawshank@google.fr";
$nouvUtilisateur -> motdepasse = "NedLogan";
$nouvUtilisateur -> save();

// On supprime le dernier utilisateur

$utilisateur3 = Actors::retrieveByPK(37);
$utilisateur3 -> delete();

require "Article.php";

$article = Article::all();
var_dump($article);

// On affiche tous nos articles

$article1=Article::retrieveByPK(1);
echo $article1->designation." ".$article1->designation;
$article2=Article::retrieveByPK(2);
echo $article2->designation." ".$article2->designation;

// On modifie un article son prix et sa désignation

$article3 = Article::retrieveByPK(3);
$article3 -> prix = 70;
$article3 -> designation = "Casque Audio Srhythm NC-75 Pro";
$article3 -> save();

// On insère un nouvel article

// $nnouvArticle = Article::all();
$nouvArticle = new Article;
$nouvArticle -> designation = "Chaise de bureau SONGMICS PU OBG24B";
$nouvArticle -> prix = 100;
$nouvArticle -> save();

// On supprime le dernier article

$article4 = Article::retrieveByPK(19);
$article4 -> delete();

$article1 = Article::retrieveByPK(1);
unset($article1->{'prix'});
?>