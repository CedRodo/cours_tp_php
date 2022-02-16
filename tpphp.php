<?php require('header.php'); ?>
<?php if (isset($_SESSION['user'])==false) { header('location: backend/identification.php'); die; } ?>
<?php require('fonctions.php'); ?>
<div class="tpphp">
<h1>TP PHP</h1>

<p style="margin: 100px 30px 40px 0px; text-align:end;">Le PDF du TP PHP Découverte est disponible <a class="pdf" href="./assets/tpphp_decouverte.pdf" target="_blank">ici <img class="logopdf" src="./assets/iconpdf.png" alt="pdf" > </a></p>

<p style="margin: 10px 30px 100px 0px; text-align:end;">Le TP PHP Découverte est <a class="pdf" href="./tpphp/index.php" target="_blank">ici </a></p>

<?php require('./tpphp/tpphp.php') ?>
<?php require('footer.php'); ?>