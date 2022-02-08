<div class="tablemulti">
<?php include('header.php'); ?>
<?php include('fonctions.php'); ?>
<h1>TABLE DE MULTIPLICATION</h1>
<p>Créez une fonction affichant les tables de multiplication du nombre entré en paramètre.


<span style="text-decoration: underline;">Contenu de la fonction :</span></p>
<pre>

function multNombre(int $nb) {
    echo "<br/>";
    echo "La table de multiplication de $nb : <br/><br/>";

    for($i=1; $i<=10; $i++) {
            echo "$nb x $i = ".$nb * $i;
            echo "<br/><br/>";
        }
    }
    
</pre>
<p>
    Usage de la fonction : " multNombre(6) "

    Résultat :
</p>
<?php
echo multNombre(6);
?>
</div>
<?php include('footer.php'); ?>