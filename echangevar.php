<?php require('header.php'); ?>
<?php if (isset($_SESSION['user'])==false) { header('location: backend/identification.php'); die; } ?>
<?php require('fonctions.php'); ?>
<div class="echangevar">
<h1>ÉCHANGE DE VARIABLES</h1>
<p>Créez une fonction qui échange les valeurs entrées en paramètre.


<span style="text-decoration: underline;">Contenu de la fonction :</span></p>
<pre>

function echangeVar($var1,$var2) {
    $tampon = $var1;
    $var1 = $var2;
    $var2 = $tampon;
    echo $var1." ".$var2;
}

</pre>
<p>
    Usage de la fonction : " echangeVar(2000,'AS Monaco') "

    Résultat :
</p>

<?php
echangeVar(2000,'AS Monaco');
echo "<br/><br/>";
?>
</div>
<?php require('footer.php'); ?>