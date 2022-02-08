<divc class="prixtva">
<?php include('header.php'); ?>
<?php include('fonctions.php'); ?>
<h1>PRIX AUGMENTE D'UNE TVA</h1>
<p>Créez une fonction somme retournant un prix avec la TVA.


<span style="text-decoration: underline;">Contenu de la fonction :<span></p>
<pre>

function ajouttva(float $prix,float $tva) {
    $prixTva = $prix + $prix * $tva;
    echo "Le prix HT est $prix €<br/><br/>";
    echo "La TVA est de $tva<br/><br/>";
    echo "Le prix avec la TVA est ";
    return $prixTva." €";
    }

</pre>
<p>
    Usage de la fonction : " ajouttva(230.5,0.2) "

    Résultat :
</p>
<?php
echo ajouttva(230.50,0.2);
echo "<br/><br/>";
?>
</div>
<?php include('footer.php'); ?>