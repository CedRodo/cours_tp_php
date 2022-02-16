<?php require('header.php'); ?>
<?php if (isset($_SESSION['user'])==false) { header('location: backend/identification.php'); die; } ?>
<?php require('fonctions.php'); ?>
<div class="tpphp2">

<h1>TP PHP2</h1>

<p style="margin: 100px 30px 40px 0px; text-align:end;">Le PDF du TP PHP Développer un site web dynamique est disponible <a class="pdf" href="./assets/tpphp2_developper_un_site_web_dynamique.pdf" target="_blank">ici <img class="logopdf" src="./assets/iconpdf.png" alt="pdf" > </a></p>

<p style="margin: 10px 30px 100px 0px; text-align:end;">Le TP PHP 2 Développer un site web dynamique est <a class="pdf" href="./tpphp2/index.php" target="_blank">ici </a></p>

<?php require('footer.php'); ?>