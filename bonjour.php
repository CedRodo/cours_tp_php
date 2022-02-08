<div class="bonjour">
<?php include('header.php'); ?>
<?php include('fonctions.php'); ?>
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
<?php include('footer.php'); ?>