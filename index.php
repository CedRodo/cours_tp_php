<?php require 'header.php';
    if (isset($_SESSION['user'])==false) {
        header('location: backend/identification.php');
        die;
    }
  
    ?>
<div class="accueil">
<h1>COURS ET EXERCICES DE PHP</h1>
<img src="http://localhost/monsite/coursphp/assets/logophp.png">
<p>Nous allons pouvoir utiliser ce site pour répertorier et visualiser les différents cours et exercices effectués en PHP. Ceux-ci sont accessibles via le menu de navigation.

Pour en savoir plus, vous pouvez directement consulter la <a href="https://www.php.net/docs.php" target="_blank">documentation</a> sur le site officiel de <a href="https://www.php.net/" target="_blank">PHP</a>.

Vous pouvez également accéder à d'autres cours :

<a href ="http://localhost/monsite/courshtmlcss/index.php" target="_blank">HTML/CSS</a>
</p>
</div>
<?php require 'footer.php'; ?>