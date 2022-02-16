<?php require('header.php'); ?>
<?php if (isset($_SESSION['user'])==false) { header('location: backend/identification.php'); die; } ?>
<?php require('fonctions.php'); ?>
<div class="bonjour">
<h1>BONJOUR A UN UTILISATEUR</h1>
<p>Créez une fonction qui dit Bonjour à l'utilisateur qui y a entré son prénom et nom.


<span style="text-decoration: underline;">Contenu de la fonction :</span></p>
<pre>

function bonjour(string $prenom,string $nom){
    echo "<br/>";
    echo "Bonjour ".$prenom." ".$nom."";
    echo "<br/><br/>";
    } 

</pre>
<p>
    Usage de la fonction : " bonjour('Cédric','Rodony') "

    Résultat :
</p>
<?php
bonjour('Cédric','Rodony');
echo "<br/><br/>";
    ?>
</div>
<?php require('footer.php'); ?>