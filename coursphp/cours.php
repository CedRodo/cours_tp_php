<div class="cours">
<?php include('header.php'); ?>
<h1>COURS DE PHP</h1>
<p style="margin: 100px 30px 100px 0px; text-align:end;">Le PDF de Découverte programmation PHP est disponible <a class="pdf" href="./assets/decouvertephp.pdf" target="_blank">ici </a></p>
<p style="margin-bottom: 40px; text-decoration: underline;">Contenu du cours en code :</p>
<pre>
&lt;?php // je peux ecrire du PHP   ?&gt;
&lt;!doctype html&gt;
&lt;html lang=&quot;fr&quot;&gt;
&lt;head&gt;
 &lt;meta charset=&quot;utf-8&quot;&gt;
 &lt;title&gt;Titre de la page&lt;/title&gt;
 &lt;link rel=&quot;stylesheet&quot; href=&quot;style.css&quot;&gt;
 &lt;script src=&quot;script.js&quot;&gt;&lt;/script&gt;
&lt;/head&gt;

&lt;?php // je peux ecrire du PHP   ?&gt;
&lt;body&gt;
MA PAGE HTML DE BASE

&lt;?php



// JS EN ALGO :

// ADDEVENTLISTNER
// ALGO  : CONDITION
// je peux ecrire du PHP
// ECHO =&gt; J AFFICHE

// OBJECTIF DU JEU ORDINATEUR ME DEMANDE un
// CHIFFRE ENTRE 1 ET 100
// VOUS ESSAYEZ DE TROUVER
// SI X &gt; ENTRE =&gt; PLUS HAUT
// SI OK OU GAME OVER


echo &quot;TEST EN PHP&quot;; ?&gt;
&lt;?php
// 1 VARIABLE

 // STRING NUMBER BOOLEAN Tableau indic&eacute;, tableau associatif
 $prenom='Yoel'; // STRING apostrophe ou quotes
 $nom=&quot;Melki&quot;; // STRING apostrophe
 $age=35.4; // INT NOMBRE ENTIER
 $info=true;           // BOOLEAN vrai
 $animal[0]=&quot;chien&quot;;                     //Tableau indic&eacute; en 0
 $animal[1]=&quot;chat&quot;;                     //Tableau indic&eacute; en 1
 $animal[2]=&quot;lapin&quot;;                     //Tableau indic&eacute; en 2

 $couleur[]=&quot;vert&quot;; // Tableau indic&eacute; sans pr&eacute;cis&eacute; mais on d&eacute;marre &agrave; 0
 $couleur[]=&quot;rouge&quot;;// Tableau indic&eacute; sans pr&eacute;cis&eacute; mais on continue &agrave; 1
 $couleur[]=&quot;orange&quot;;// Tableau indic&eacute; sans pr&eacute;cis&eacute; mais on continue &agrave; 2

 $personne['nom']=&quot;Melki&quot;; // Tableau associatif
 $personne['prenom']=&quot;yoel&quot;; // Tableau associatif
 $personne['age']=35; // Tableau associatif


 echo $prenom; // ECHO AFFICHE DES DONNEES ET DES VARIABLES
 echo $animal[0]; // chien
 var_dump($animal); // AFFICHE LE TABLEAU
 print_r($animal); // AFFICHE LE TABLEAU

 // Concat&eacute;nation

 echo &quot;Bonjour je m'appelle &quot;.$prenom.&quot; &quot;.$nom;

 // Op&eacute;rations

 $somme1=100;
 $somme2=150;

 $addition = $somme1 + $somme2;
 $mult = $somme1 * $somme2;
 
 echo $addition; // 250
 echo $mult; // 15000

// 2 CONTROLE CONDITON IF

$age = 15;
echo $age; // affiche 15

if ($age&gt;18) {
 echo &quot;Vous &ecirc;tes majeur.&quot;;
}
else {
 echo &quot;vous &ecirc;tes mineur.&quot;;
}

// 3 BOUCLE FOR , WHILE , DO WHILE
// BOUCLE EN PHP DE 1 A 100

$animal[0]=&quot;chien&quot;;
$animal[1]=&quot;chat&quot;;
$animal[2]=&quot;lapin&quot;;

echo &quot;&lt;br/&gt;&quot;;

echo $animal[0];
echo $animal[1];
echo $animal[2];

FOR ($i=0; $i&lt;3; $i++){
   echo $animal[$i].&quot;&lt;br/&gt;&quot;;
}
// 4 FONCTION

// 5 B.D



?&gt;
&lt;br/&gt;
&lt;br/&gt;

&lt;?php    
   $monPrenom=&quot;C&eacute;dric&quot;;
   $monNom=&quot;Rodony&quot;;
   $monAge=&quot;39&quot;;
   $mesInfos[]=&quot;C&eacute;dric&quot;;
   $mesInfos[]=&quot;Rodony&quot;;
   $mesInfos[]=39;
   $infos = Array(&quot;Prenom&quot; =&gt; &quot;C&eacute;dric&quot;, &quot;Nom&quot; =&gt; &quot;Rodony&quot;, &quot;Age&quot; =&gt; 39);

echo $monPrenom;
echo $monNom;
echo $monAge.&quot;\n&quot;;
var_dump($mesInfos);
var_dump($infos);
print_r($infos);
echo &quot;&lt;br/&gt;&quot;.$infos['Prenom'].&quot;&lt;br/&gt;&quot;;
echo $infos['Nom'].&quot;&lt;br/&gt;&quot;;
echo $infos['Age'].&quot;&lt;br/&gt;&quot;;

echo &quot;&lt;br/&gt;&quot;.&quot;&lt;br/&gt;&quot;.$mesInfos[0];
echo &quot;&lt;br/&gt;&quot;.$mesInfos[1];
echo &quot;&lt;br/&gt;&quot;.$mesInfos[2];





?&gt;

&lt;?php

$nom = &quot;Eddie&quot;;
$prenom = &quot;Murphy&quot;;
$age = 61;
$majorite = &quot;&quot;;

if ($age&gt;=18) {
   $majorite = &quot;majeur&quot;;
}
else {
   $majorite = &quot;mineur&quot;;
}

echo &quot;Bonjour &quot;.$nom.&quot; &quot;.$prenom.&quot;. Vous avez &quot;.$age.&quot; ans. Vous &ecirc;tes &quot;.$majorite.&quot;.&quot;;

$prixTrotinette = 300;
$prixOrdinateur = 400;
$prixTelephone = 200;

$sommeProduits = $prixTrotinette + $prixOrdinateur + $prixTelephone;

echo &quot;&lt;br/&gt;&quot;.&quot;La somme des produits est de : &quot;.$sommeProduits.&quot;&lt;br/&gt;&quot;;

$moyenneSomme = $sommeProduits / 3;

echo &quot;La moyenne est de : &quot;.$moyenneSomme.&quot;&lt;br/&gt;&quot;;

$tva = 20/100;

$prixTvaTrotinette = $prixTrotinette + ($prixTrotinette * $tva);

echo &quot;&lt;br/&gt;&quot;.&quot;Le prix avec la TVA de la trotinette est de : &quot;.$prixTvaTrotinette;

$prixTvaOrdinateur = $prixOrdinateur + ($prixOrdinateur * $tva);

echo &quot;&lt;br/&gt;&quot;.&quot;Le prix avec la TVA de l'ordinateur est de : &quot;.$prixTvaOrdinateur;

$prixTvaTelephone = $prixTelephone + ($prixTelephone * $tva);

echo &quot;&lt;br/&gt;&quot;.&quot;Le prix avec la TVA du t&eacute;l&eacute;phone est de : &quot;.$prixTvaTelephone;

echo &quot;&lt;br/&gt;&quot;.&quot;La somme des produits avec la TVA est de : &quot;.$prixTvaTrotinette + $prixTvaOrdinateur + $prixTvaTelephone.&quot;.&quot;;

echo &quot;&lt;br/&gt;&lt;br/&gt;&quot;;


// Vous affichez un carr&eacute; d'&eacute;toile de 5

echo &quot;Le carr&eacute; de 5 &eacute;toiles : &lt;br/&gt;&lt;br/&gt;&quot;;

FOR ($i=1; $i&lt;6; $i++) {
FOR ($e=1; $e&lt;6; $e++) {
  echo &quot;*&quot;;
}
echo &quot;&lt;br/&gt;&quot;;
}

// Affichez l'ensemble des tables de multipliaction de 1 &agrave; 10

echo &quot;&lt;br/&gt;&lt;br/&gt;&quot;;

echo &quot;La table de multiplication de 10 : &lt;br/&gt;&lt;br/&gt;&quot;;

FOR ($i=1; $i&lt;=10; $i++) {
   FOR ($m=1; $m&lt;=10; $m++) {
       echo &quot;$i x $m = &quot;.$i * $m;
       echo &quot;&lt;br/&gt;&quot;;
   }
   echo &quot;&lt;br/&gt;&quot;;
}

// Affichez 1 +2+3+4+5=

echo &quot;&lt;br/&gt;&quot;;

echo &quot;La somme de 1, 2, 3, 4 et 5 : &lt;br/&gt;&lt;br/&gt;&quot;;

FOR ($i=1; $i&lt;5; $i++) {

   $somme = $somme + $i;
   echo &quot;$i + &quot;;
}
$somme = $somme + $i;
echo &quot;$i = &quot;.$somme;

// Affichez la factoriel de 5 : 5* 4*3*2*1

echo &quot;&lt;br/&gt;&lt;br/&gt;&quot;;

echo &quot;La factorielle de 5 : &lt;br/&gt;&lt;br/&gt;&quot;;

$factorielle = 1;

FOR ($i=5; $i&gt;1; $i--) {

   $factorielle = $factorielle * $i;
   echo &quot;$i x &quot;;
}
echo &quot;$i = &quot;.$factorielle;


// Les fonctions
// D&eacute;finir ou cr&eacute;er la fonction

function addition($nombre1,$nombre2) {
   $result = $nombre + $nombre2;
   return $result;
}
$somme=addition(5,5); // L'appel de la fonction

// Creez une fonction somme retournant la somme de trois nombres

echo &quot;&lt;br/&gt;&lt;br/&gt;&quot;;

function somme($nb1,$nb2,$nb3){
   $resultat=$nb1 + $nb2 + $nb3;
   echo &quot;La somme de $nb1 + $nb2 + $nb3 = &quot;;
   return $resultat;
}
echo somme(5, 10, 40);

// Creez une fonction somme retournant un prix avec la TVA

echo &quot;&lt;br/&gt;&lt;br/&gt;&quot;;

function ajoutTva($prix) {
   $prixTva = $prix * 1.2;
   echo &quot;Le prix avec la TVA est &quot;;
   return $prixTva;
}

echo ajoutTva(230);

// Creez une fonction somme retournant avec une reduction de 20 %

echo &quot;&lt;br/&gt;&lt;br/&gt;&quot;;

function reduction($prix) {
   $prixReduction = $prix - $prix * 0.2;
   echo &quot;Le nouveau prix avec la r&eacute;duction est &quot;;
   return $prixReduction;
}

echo reduction(250);

echo &quot;&lt;br/&gt;&lt;br/&gt;&quot;;

// Creez une fonction somme affichant les chiffre de 1 au chiffre en parametre

function sommeNombre($nb) {
   echo &quot;La somme de &quot;;
   FOR ($i=1; $i&lt;$nb; $i++) {

       $somme = $somme + $i;
       echo &quot;$i + &quot;;
   }
   $somme = $somme + $i;
   echo &quot;$i = &quot;;
   return $somme;
}

echo sommeNombre(7);

echo &quot;&lt;br/&gt;&lt;br/&gt;&quot;;

// Creez une fonction affichant les tables de multiplication du nombre entr&eacute; en parametre

function multNombre($nb) {
   echo &quot;La table de multiplication de $nb : &lt;br/&gt;&lt;br/&gt;&quot;;

   FOR ($i=1; $i&lt;=10; $i++) {
           echo &quot;$nb x $i = &quot;.$nb * $i;
           echo &quot;&lt;br/&gt;&quot;;
       }
   }

echo multNombre(8);

echo &quot;&lt;br/&gt;&lt;br/&gt;&quot;;

// Creez une fonction somme affichant des etoiles du nombre entr&eacute; en parametre

function etoiles($nb) {
   FOR ($i = 0; $i &lt; $nb; $i++) {
       echo &quot;*&quot;;
   }
}

echo etoiles(5);

echo &quot;&lt;br/&gt;&lt;br/&gt;&quot;;

// Creez une fonction somme retournant la factorielle du nombre entr&eacute; en parametre

function factorielle($nb) {
   $result = 1;
   for($i = 1; $i &lt;= $nb; $i++) {
       $result = $result * $i;
   }
   echo &quot;La factorielle de $nb est &quot;;
   return $result;
}

echo factorielle(9);

echo &quot;&lt;br/&gt;&lt;br/&gt;&quot;;

// echo &quot;La factorielle de 5 : &lt;br/&gt;&lt;br/&gt;&quot;;

$factorielle = 1;

echo &quot;La factorielle de 5 est &quot;;

FOR ($i=5; $i&gt;1; $i--) {

   $factorielle = $factorielle * $i;
   echo &quot;$i x &quot;;
}
echo &quot;$i = &quot;.$factorielle.&quot;.&quot;;

echo &quot;&lt;br/&gt;&lt;br/&gt;&quot;;


// Echange de variable

$var1 = 'Cedric';
$var2 = 'Rodony';

   $varTampon = $var1;
   $var1 = $var2;
   $var2 = $varTampon;
   


echo $var1;
echo &quot;&lt;br/&gt;&quot;;
echo $var2;
echo &quot;&lt;br/&gt;&quot;;

function echangeVar($prenomUtilisateur,$nomUtilisateur) {
   $tampon = $prenomUtilisateur;
   $prenomUtilisateur = $nomUtilisateur;
   $nomUtilisateur = $tampon;
   echo $prenomUtilisateur.&quot; &quot;.$nomUtilisateur;
}    

echangeVar('C&eacute;dric','Rodony');

echo &quot;&lt;br/&gt;&lt;br/&gt;&quot;;

$var_maj = strtoupper('la vie est belle');
echo $var_maj;

?&gt;

</pre>

</div>
<?php include('footer.php'); ?>