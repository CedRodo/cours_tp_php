<?php require('header.php'); ?>
<?php if (isset($_SESSION['user'])==false) { header('location: backend/identification.php'); die; } ?>
<?php require('fonctions.php'); ?>
<div class="factorielle">
<h1>FACTORIELLE D'UN NOMBRE</h1>
<p>Créez une fonction retournant la factorielle du nombre entré en parametre.


<span style="text-decoration: underline;">Contenu de la fonction :</span></p>
<pre>

function factorielle(int $nb) {
    $resultat = 1;
    echo "La factorielle de 5 est ";
    for($i=5; $i>1; $i--) {
        $resultat = $resultat * $i;
        echo "$i x "; 
        }
    echo "$i = ";
    return $resultat;
}

</pre>
<p>
    Usage de la fonction : " factorielle(5) "

    Résultat :
</p>
<?php
echo factorielle(5);
echo "<br/><br/>";
?>
</div>
<?php require('footer.php'); ?>