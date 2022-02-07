<div class="etoiles">
<?php include('header.php'); ?>
<?php include('fonctions.php'); ?>
<h1>CARRE D'ETOILES</h1>
<p>Créez une fonction qui affiche le carré d'étoiles d'un nombre entré en paramètre.


<span style="text-decoration: underline;">Contenu de la fonction :</span></p>
<pre>

function etoiles(int $nb) {
   echo &quot;Le carr&eacute; de $nb &eacute;toiles : &lt;br/&gt;&lt;br/&gt;&quot;;
   for($i=1; $i&lt;=$nb; $i++) {
       for($e=1; $e&lt;=$nb; $e++) {
           echo &quot;*&quot;;
           }
       echo &quot;&lt;br/&gt;&quot;;
       }
   }

</pre>
<p>
    Usage de la fonction : " etoiles(9) "

    Résultat :
</p>
<?php
echo etoiles(9);
echo "<br/>";
?>
</div>
<?php include('footer.php'); ?>