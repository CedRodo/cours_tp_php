<div class="jeu">
<?php include('header.php'); ?>
<?php include('fonctions.php'); ?>
<h1>JEU DU NOMBRE A DEVINER</h1>
<p>Créez une fonction générant un nombre à deviner aléatoire dans une fourchette de deux nombres entrés en paramètre et générant également un nombre aléatoire proposé par l'ordinateur dans cette même fourchette, le nombre à deviner et celui proposé devant correspondre pour gagner. La fonction doit aussi définir le nombre de tentatives maximal que l'ordinateur aura pour trouver le nombre à deviner, en veillant à chaque fois à ce qu'il ne propose qu'un nombre inférieur à celui qui a été jugé trop grand et qu'un nombre supérieur à celui jugé trop petit. La fonction gèrera également le nombre de parties possibles (une nouvelle partie pour chaque nombre deviné ou tentatives échouées).


<span style="text-decoration: underline;">Contenu de la fonction :</span></p>
<pre>

function jeudunombre(int $tours,int $nbchances,int $minimum,int $maximum) {   
   $nbtours = 0;
   $nbchancestotales = $nbchances;
   $min = $minimum;   
   $max = $maximum;
   while ($nbtours != $tours) {
       $nbtours++;
       echo &quot;&lt;hr&gt;&lt;br/&gt;Tour n&deg;$nbtours&lt;br/&gt;&lt;br/&gt;&lt;hr&gt;&lt;br/&gt;&quot;;
       $nbcorrect = rand($min,$max);
       echo &quot;Le nombre &agrave; deviner est : * $nbcorrect *&lt;br/&gt;&lt;br/&gt;&quot;;
       $nbcpu = rand($min,$max);
       echo &quot;Nombre de tentatives possibles du CPU : $nbchancestotales&lt;br/&gt;&lt;br/&gt;&quot;;
       echo &quot;~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~&lt;br/&gt;&lt;br/&gt;&quot;;
       do {
           echo &quot;Chance(s) restante(s) : $nbchances&lt;br/&gt;&lt;br/&gt;&lt;br/&gt;&quot;;       
           $nbcpu = rand($min,$max);
           echo &quot;Tentative n&deg;&quot;.($nbchancestotales-$nbchances+1).&quot;&lt;br/&gt;&lt;br/&gt;&lt;br/&gt;&quot;;
           echo &quot;Nombre propos&eacute; par le CPU : $nbcpu&lt;br/&gt;&lt;br/&gt;&quot;;
               if ($nbcpu &gt; $nbcorrect) {
                   echo &quot;&gt; Le nombre &agrave; deviner est plus petit &lt;&quot;.&quot;&lt;br/&gt;&lt;br/&gt;&quot;;
                   $max = $nbcpu-1;
               } else if ($nbcpu &lt; $nbcorrect) {
                   echo &quot;&gt; Le nombre &agrave; deviner est plus grand &lt;&quot;.&quot;&lt;br/&gt;&lt;br/&gt;&quot;;
                   $min = $nbcpu+1;
               }
           echo &quot;-----------------------------------------------&lt;br/&gt;&lt;br/&gt;&quot;;
           $nbchances--;
       }
       while (($nbcpu != $nbcorrect) &amp;&amp; ($nbchances &gt; 0));
       if ($nbchances == ($nbchancestotales - 1)) {           
           echo &quot;BRAVO ! Le nombre a &eacute;t&eacute; trouv&eacute; du premier coup !&lt;br/&gt;&lt;br/&gt;&quot;;
           $nbchances = $nbchancestotales;
           $min = $minimum;
           $max = $maximum;
       } else if (($nbchances &gt;= 0) &amp;&amp; ($nbchances &lt; $nbchancestotales) &amp;&amp; ($nbcpu == $nbcorrect)) {
           echo &quot;BRAVO ! Le nombre a &eacute;t&eacute; trouv&eacute; !&lt;br/&gt;&lt;br/&gt;&quot;;
           $nbchances = $nbchancestotales;
           $min = $minimum;
           $max = $maximum;
       } else {
           echo &quot;PERDU... Le nombre de chances est &eacute;puis&eacute;.&lt;br/&gt;&lt;br/&gt;&quot;;
           $nbchances = $nbchancestotales;
           $min = $minimum;
           $max = $maximum;           
       }
   }
}
</pre>
<p>
    Usage de la fonction : " jeudunombre(6,10,1,100) "

    Résultat (habillage en plus) :
</p>
<?php

    echo "<br/>";
    
    echo "**********************************************<br/>";

    echo "********* JEU DU NOMBRE A DEVINER *********<br/>";

    echo "**********************************************<br/><br/>";
    
    jeudunombre(6,10,1,100);

    echo "<hr><br/>********************************<br/>";

    echo "********* FIN DU JEU ***********<br/>";

    echo "********************************<br/><br/>";

?>
</div>
<?php include('footer.php'); ?>