<div class="pairimpair">
<?php require('header.php'); ?>
<?php require('fonctions.php'); ?>
<h1>NOMBRE PAIR OU IMPAIR</h1>
<p>Créez une fonction qui affiche si le nombre entré en paramètre est pair ou impair.


<span style="text-decoration: underline;">Contenu de la fonction :</span></p>
<pre>

function pairimpair(int $nb) {
    if ($nb % 2 == 0) {
        return "Le nombre $nb est pair.";
    }
    else {
        return "Le nombre $nb est impair.";
    }   
}

</pre>
<p>
    Usage de la fonction : " pairimpair(8) "

    Résultat :
</p>
<?php
echo pairimpair(8);
echo "<br/><br/>";
?>
</div>
<?php require('footer.php'); ?>