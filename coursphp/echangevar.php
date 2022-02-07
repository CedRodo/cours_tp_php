<div class="echangevar">
<?php include('header.php'); ?>
<?php include('fonctions.php'); ?>
<h1>ECHANGE DE VARIABLES</h1>
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
<?php include('footer.php'); ?>