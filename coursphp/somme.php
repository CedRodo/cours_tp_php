<div class="somme">
<?php include('header.php'); ?>
<?php include('fonctions.php'); ?>
<h1>SOMME D'UNE SUITE D'UN NOMBRE</h1>
<p>Créez une fonction somme affichant et additionnant une suite croissante de nombres incrémentés de 1 allant jusqu'au nombre entré en paramètre.


<span style="text-decoration: underline;">Contenu de la fonction :</p>
<pre>

function somme(int $nb) {
    $somme=0;
    
    for($i=1; $i<$nb; $i++) {

        $somme = $somme + $i;
        echo "$i + "; 
        }
    $somme = $somme + $i;
    echo "$i = ".$somme;
    }

</pre>
<p>
    Usage de la fonction : " somme(13) "

    Résultat :
</p>
<?php
echo somme(13);
echo "<br/><br/>";
?>
</div>
<?php include('footer.php'); ?>