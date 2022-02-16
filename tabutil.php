<?php require('header.php'); ?>
<?php if (isset($_SESSION['user'])==false) { header('location: backend/identification.php'); die; } ?>
<?php require('fonctions.php'); ?>
<div class="tabutil">
<h1>TABLEAU D'UTILISATEURS</h1>
<p>Créez un tableau d'utilisateurs qui sera affiché avec la méthode "foreach".


<span style="text-decoration: underline;">Contenu du code :</span></p>
<pre>

&lt;?php
   $utilisateur[]=&quot;Yoel&quot;;
   $utilisateur[]=&quot;Dezzy&quot;;
   $utilisateur[]=&quot;Thierry&quot;;
   $utilisateur[]=&quot;C&eacute;dric&quot;;
   $utilisateur[]=&quot;Sitou&quot;;
   $utilisateur[]=&quot;Chakir&quot;;

   
foreach ($utilisateur as $key =&gt; $value) {
   echo &quot;&lt;hr&gt; ID &quot;.$key.&quot; &quot;.$value;
}

?&gt;

</pre>
<p>
    Résultat :
</p>
<?php
    $utilisateur[]="Yoel";
    $utilisateur[]="Dezzy";
    $utilisateur[]="Thierry";
    $utilisateur[]="Cédric";
    $utilisateur[]="Sitou";
    $utilisateur[]="Chakir";

    
foreach ($utilisateur as $key => $value) {
    echo "<hr> ID ".$key." ".$value;
}
echo "<br/><br/>";
?>
</div>
<?php require('footer.php'); ?>