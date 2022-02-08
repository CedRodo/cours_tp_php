<?php require 'header.php' ?>
<?php require 'tpphp.php' ?>
<?php require 'articles.php' ?>
<?php require 'clients.php' ?>
<?php require 'fonctions.php' ?>

<h2>Bon de commande</h2>

<p class="contenu">Contenu de code :</p>

<p class="contfichier"> - Contenu du fichier "fonctions.php" :</p>

<pre>
&lt;?php

$nbligne = rand(1,10);

function aleaquantite(int $nbalea) {
$aleaquant = rand(1,$nbalea);
return $aleaquant;
}

function prixtotal($qt,$pu) {
return $qt * $pu;
}

function totalttc($pt) {
return $pt * 1.2;
}

function randomDate() {
   $datemin = strtotime('1 January 2021');
   $datemax = strtotime('31 december 2022');
   $randomTime = mt_rand($datemin, $datemax);
   
   echo date('m.d.y', $randomTime);
}


function tableauarticle($art) {

   echo '
   &lt;div class=&quot;tabbc&quot;&gt;
   &lt;table style=&quot;margin-top: 50px;&quot;&gt;
   &lt;tr&gt;
       &lt;th&gt;R&eacute;f&eacute;rence&lt;/th&gt;
       &lt;th style=&quot;width: 500px;&quot;&gt;D&eacute;signation&lt;/th&gt;
       &lt;th style=&quot;width: 200px;&quot;&gt;Prix unitaire (hors taxe)&lt;/th&gt;
       &lt;th&gt;Quantit&eacute;&lt;/th&gt;
       &lt;th style=&quot;width: 150px;&quot;&gt;Prix total&lt;/th&gt;
       &lt;th style=&quot;width: 200px;&quot;&gt;Total TTC&lt;/th&gt;
   &lt;/tr&gt;';
   $nbalea = rand(1,10);
   shuffle($art);
   $httotal = 0;
   for($i=0;$i&lt;=$nbalea-1;$i++) {
   echo &quot;&lt;tr&gt;&quot;;
   echo &quot;&lt;td&gt;&quot;;
   echo $art[$i]['refarticle'];
   echo &quot;&lt;/td&gt;&quot;;
   echo &quot;&lt;td&gt;&quot;;
   echo $art[$i]['nomarticle'];
   echo &quot;&lt;/td&gt;&quot;;
   echo '&lt;td style=&quot;text-align: end;&quot;&gt;';
   echo $art[$i]['htarticle'].&quot; &euro;&quot;;
   echo &quot;&lt;/td&gt;&quot;;
   echo '&lt;td style=&quot;text-align: center;&quot;&gt;';
   $qtart = aleaquantite(8);
   echo $qtart;
   echo &quot;&lt;/td&gt;&quot;;
   echo '&lt;td style=&quot;text-align: end;&quot;&gt;';
   $htart = $art[$i]['htarticle']*$qtart;
   echo $htart.&quot; &euro;&quot;;
   echo &quot;&lt;/td&gt;&quot;;
   echo '&lt;td style=&quot;text-align: end;&quot;&gt;';
   echo ($htart * 1.2).&quot; &euro;&quot;;
   echo &quot;&lt;/td&gt;&quot;;
   echo &quot;&lt;/tr&gt;&quot;;
   $httotal = $httotal + $htart;
   }
   
   echo '&lt;table class=&quot;tabtotal&quot; style=&quot;margin-top: 50px;&quot;&gt;
       &lt;tr&gt;
           &lt;th&gt;Total HT&lt;/th&gt;
           &lt;td style=&quot;text-align: end;&quot;&gt;';
           echo $httotal.&quot; &euro;&quot;;
   echo '&lt;/td&gt;
       &lt;/tr&gt;
       &lt;tr&gt;
           &lt;th&gt;TVA 20%&lt;/th&gt;
           &lt;td style=&quot;text-align: end;&quot;&gt;';
           $tvatotal = ($httotal * 0.2);
           echo $tvatotal.&quot; &euro;&quot;;
   echo '&lt;/td&gt;
       &lt;/tr&gt;
       &lt;tr&gt;
           &lt;th&gt;Total&lt;/th&gt;
           &lt;td style=&quot;text-align: end;&quot;&gt;';
           echo ($httotal + $tvatotal).&quot; &euro;&quot;;
   echo &quot;&lt;/td&gt;
       &lt;/tr&gt;
       &lt;/table&gt;
       &lt;/div&gt;&quot;;
}

?&gt;</pre>

<p class="contfichier"> - Contenu du fichier "articles.php" :</p>

<pre>

&lt;?php
$article[0]=array(&quot;nomarticle&quot; =&gt; &quot;V&eacute;lo ST520&quot; , &quot;refarticle&quot; =&gt; &quot;0001234&quot; , &quot;htarticle&quot; =&gt; 299);
$article[1]=array(&quot;nomarticle&quot; =&gt; &quot;Ordinateur portable Lenovo LEGION Y540-15IRH&quot; , &quot;refarticle&quot; =&gt; &quot;0004321&quot; , &quot;htarticle&quot; =&gt; 799);
$article[2]=array(&quot;nomarticle&quot; =&gt; &quot;Chaise de bureau SONGMICS PU OBG24B&quot; , &quot;refarticle&quot; =&gt; &quot;0001324&quot; , &quot;htarticle&quot; =&gt; 100);
$article[3]=array(&quot;nomarticle&quot; =&gt; &quot;TV LG 32LM6300&quot; , &quot;refarticle&quot; =&gt; &quot;0004231&quot; , &quot;htarticle&quot; =&gt; 378);
$article[4]=array(&quot;nomarticle&quot; =&gt; &quot;Lames de Recharge Gillette Mach3&quot; , &quot;refarticle&quot; =&gt; &quot;0004321&quot; , &quot;htarticle&quot; =&gt; 37);
$article[5]=array(&quot;nomarticle&quot; =&gt; &quot;Casque Audio Srhythm NC-75 Pro&quot; , &quot;refarticle&quot; =&gt; &quot;0003412&quot; , &quot;htarticle&quot; =&gt; 70);
$article[6]=array(&quot;nomarticle&quot; =&gt; &quot;Tasse &agrave; caf&eacute; The Office World's Best Boss&quot; , &quot;refarticle&quot; =&gt; &quot;0003421&quot; , &quot;htarticle&quot; =&gt; 20);
$article[7]=array(&quot;nomarticle&quot; =&gt; &quot;Livre L'anatomie du sc&eacute;nario&quot; , &quot;refarticle&quot; =&gt; &quot;0001243&quot; , &quot;htarticle&quot; =&gt; 25);
$article[8]=array(&quot;nomarticle&quot; =&gt; &quot;Aspirateur Matelas/Textiles Dibea Ultra Vortex&quot; , &quot;refarticle&quot; =&gt; &quot;0002341&quot; , &quot;htarticle&quot; =&gt; 90);
$article[9]=array(&quot;nomarticle&quot; =&gt; &quot;Chaussures de Football adidas Top Sala&quot; , &quot;refarticle&quot; =&gt; &quot;0003214&quot; , &quot;htarticle&quot; =&gt; 45);
?&gt;</pre>

<h3>1) Tableau des articles au complet</h2>

<p class="contfichier"> - Contenu de la partie concernant le tableau d'articles au complet dans le fichier "index.php" :</p>

<pre>
&lt;?php
   // for($i=0;$i&lt;=9;$i++) {
   //     $quantiteArticle[$i] = rand(1,20);
   // }

   $i = 0;
   do {
       $quantiteArticle[$i] = rand(1,20);
   $i++;
   }
   while ($i &lt;= 9);
?&gt;

&lt;table&gt;
   &lt;tr&gt;
       &lt;th&gt;R&eacute;f&eacute;rence&lt;/th&gt;
       &lt;th&gt;D&eacute;signation&lt;/th&gt;
       &lt;th&gt;Prix unitaire (hors taxe)&lt;/th&gt;
       &lt;th&gt;Quantit&eacute;&lt;/th&gt;
       &lt;th&gt;Prix total&lt;/th&gt;
       &lt;th&gt;Total TTC&lt;/th&gt;
   &lt;/tr&gt;
   &lt;tr&gt;
       &lt;td&gt;&lt;?php echo $article[0]['refarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[0]['nomarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[0]['htarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $quantiteArticle[0]; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php $ptArt1 = prixtotal($quantiteArticle[0],($article[0]['htarticle'])); echo $ptArt1; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo totalttc($ptArt1); ?&gt;&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr&gt;
       &lt;td&gt;&lt;?php echo $article[1]['refarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[1]['nomarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[1]['htarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $quantiteArticle[1]; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php $ptArt2 = prixtotal($quantiteArticle[1],($article[1]['htarticle'])); echo $ptArt2; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo totalttc($ptArt2); ?&gt;&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr&gt;
       &lt;td&gt;&lt;?php echo $article[2]['refarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[2]['nomarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[2]['htarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $quantiteArticle[2]; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php $ptArt3 = prixtotal($quantiteArticle[2],($article[2]['htarticle'])); echo $ptArt3; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo totalttc($ptArt3); ?&gt;&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr&gt;
       &lt;td&gt;&lt;?php echo $article[3]['refarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[3]['nomarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[3]['htarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $quantiteArticle[3]; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php $ptArt4 = prixtotal($quantiteArticle[3],($article[3]['htarticle'])); echo $ptArt4; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo totalttc($ptArt4); ?&gt;&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr&gt;
       &lt;td&gt;&lt;?php echo $article[4]['refarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[4]['nomarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[4]['htarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $quantiteArticle[4]; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php $ptArt5 = prixtotal($quantiteArticle[4],($article[4]['htarticle'])); echo $ptArt5; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo totalttc($ptArt5); ?&gt;&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr&gt;
       &lt;td&gt;&lt;?php echo $article[5]['refarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[5]['nomarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[5]['htarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $quantiteArticle[5]; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php $ptArt6 = prixtotal($quantiteArticle[5],($article[5]['htarticle'])); echo $ptArt6; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo totalttc($ptArt6); ?&gt;&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr&gt;
       &lt;td&gt;&lt;?php echo $article[6]['refarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[6]['nomarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[6]['htarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $quantiteArticle[6]; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php $ptArt7 = prixtotal($quantiteArticle[6],($article[6]['htarticle'])); echo $ptArt7; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo totalttc($ptArt7); ?&gt;&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr&gt;
       &lt;td&gt;&lt;?php echo $article[7]['refarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[7]['nomarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[7]['htarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $quantiteArticle[7]; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php $ptArt8 = prixtotal($quantiteArticle[7],($article[7]['htarticle'])); echo $ptArt8; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo totalttc($ptArt8); ?&gt;&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr&gt;
       &lt;td&gt;&lt;?php echo $article[8]['refarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[8]['nomarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[8]['htarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $quantiteArticle[8]; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php $ptArt9 = prixtotal($quantiteArticle[8],($article[8]['htarticle'])); echo $ptArt9; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo totalttc($ptArt9); ?&gt;&lt;/td&gt;
   &lt;/tr&gt;
   &lt;tr&gt;
       &lt;td&gt;&lt;?php echo $article[9]['refarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[9]['nomarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $article[9]['htarticle']; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo $quantiteArticle[9]; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php $ptArt10 = prixtotal($quantiteArticle[9],($article[9]['htarticle'])); echo $ptArt10; ?&gt;&lt;/td&gt;
       &lt;td&gt;&lt;?php echo totalttc($ptArt10); ?&gt;&lt;/td&gt;
   &lt;/tr&gt;

&lt;/table&gt;

       &lt;table style=&quot;margin-top: 50px;&quot;&gt;
           &lt;tr&gt;
               &lt;th&gt;Total HT&lt;/th&gt;
               &lt;td&gt;&lt;?php $totalht = ($ptArt1)+($ptArt2)+($ptArt3)+($ptArt4)+($ptArt5)+($ptArt6)+($ptArt7)+($ptArt8)+($ptArt9)+($ptArt10); echo $totalht.&quot; &euro;&quot;; ?&gt;&lt;/td&gt;
           &lt;/tr&gt;
           &lt;tr&gt;
               &lt;th&gt;TVA 20%&lt;/th&gt;
               &lt;td&gt;&lt;?php $totaltva = ($totalht * 0.2); echo $totaltva.&quot; &euro;&quot;; ?&gt;&lt;/td&gt;
           &lt;/tr&gt;
           &lt;tr&gt;
               &lt;th&gt;Total&lt;/th&gt;
               &lt;td&gt;&lt;?php echo ($totalht + $totaltva).&quot; &euro;&quot;; ?&gt;&lt;/td&gt;
           &lt;/tr&gt;
       &lt;/table&gt;</pre>

<p class="resultat"> - Résultat :</p>

<?php
    // for($i=0;$i<=9;$i++) {
    //     $quantiteArticle[$i] = rand(1,20);
    // }

    $i = 0;
    do {
        $quantiteArticle[$i] = rand(1,20);
    $i++;
    }
    while ($i <= 9);
?>

<table>
    <tr>
        <th>Référence</th>
        <th>Désignation</th>
        <th>Prix unitaire (hors taxe)</th>
        <th>Quantité</th>
        <th>Prix total</th>
        <th>Total TTC</th>
    </tr>
    <tr>
        <td><?php echo $article[0]['refarticle']; ?></td>
        <td><?php echo $article[0]['nomarticle']; ?></td>
        <td><?php echo $article[0]['htarticle']; ?></td>
        <td><?php echo $quantiteArticle[0]; ?></td>
        <td><?php $ptArt1 = prixtotal($quantiteArticle[0],($article[0]['htarticle'])); echo $ptArt1; ?></td>
        <td><?php echo totalttc($ptArt1); ?></td>
    </tr>
    <tr>
        <td><?php echo $article[1]['refarticle']; ?></td>
        <td><?php echo $article[1]['nomarticle']; ?></td>
        <td><?php echo $article[1]['htarticle']; ?></td>
        <td><?php echo $quantiteArticle[1]; ?></td>
        <td><?php $ptArt2 = prixtotal($quantiteArticle[1],($article[1]['htarticle'])); echo $ptArt2; ?></td>
        <td><?php echo totalttc($ptArt2); ?></td>
    </tr>
    <tr>
        <td><?php echo $article[2]['refarticle']; ?></td>
        <td><?php echo $article[2]['nomarticle']; ?></td>
        <td><?php echo $article[2]['htarticle']; ?></td>
        <td><?php echo $quantiteArticle[2]; ?></td>
        <td><?php $ptArt3 = prixtotal($quantiteArticle[2],($article[2]['htarticle'])); echo $ptArt3; ?></td>
        <td><?php echo totalttc($ptArt3); ?></td>
    </tr>
    <tr>
        <td><?php echo $article[3]['refarticle']; ?></td>
        <td><?php echo $article[3]['nomarticle']; ?></td>
        <td><?php echo $article[3]['htarticle']; ?></td>
        <td><?php echo $quantiteArticle[3]; ?></td>
        <td><?php $ptArt4 = prixtotal($quantiteArticle[3],($article[3]['htarticle'])); echo $ptArt4; ?></td>
        <td><?php echo totalttc($ptArt4); ?></td>
    </tr>
    <tr>
        <td><?php echo $article[4]['refarticle']; ?></td>
        <td><?php echo $article[4]['nomarticle']; ?></td>
        <td><?php echo $article[4]['htarticle']; ?></td>
        <td><?php echo $quantiteArticle[4]; ?></td>
        <td><?php $ptArt5 = prixtotal($quantiteArticle[4],($article[4]['htarticle'])); echo $ptArt5; ?></td>
        <td><?php echo totalttc($ptArt5); ?></td>
    </tr>
    <tr>
        <td><?php echo $article[5]['refarticle']; ?></td>
        <td><?php echo $article[5]['nomarticle']; ?></td>
        <td><?php echo $article[5]['htarticle']; ?></td>
        <td><?php echo $quantiteArticle[5]; ?></td>
        <td><?php $ptArt6 = prixtotal($quantiteArticle[5],($article[5]['htarticle'])); echo $ptArt6; ?></td>
        <td><?php echo totalttc($ptArt6); ?></td>
    </tr>
    <tr>
        <td><?php echo $article[6]['refarticle']; ?></td>
        <td><?php echo $article[6]['nomarticle']; ?></td>
        <td><?php echo $article[6]['htarticle']; ?></td>
        <td><?php echo $quantiteArticle[6]; ?></td>
        <td><?php $ptArt7 = prixtotal($quantiteArticle[6],($article[6]['htarticle'])); echo $ptArt7; ?></td>
        <td><?php echo totalttc($ptArt7); ?></td>
    </tr>
    <tr>
        <td><?php echo $article[7]['refarticle']; ?></td>
        <td><?php echo $article[7]['nomarticle']; ?></td>
        <td><?php echo $article[7]['htarticle']; ?></td>
        <td><?php echo $quantiteArticle[7]; ?></td>
        <td><?php $ptArt8 = prixtotal($quantiteArticle[7],($article[7]['htarticle'])); echo $ptArt8; ?></td>
        <td><?php echo totalttc($ptArt8); ?></td>
    </tr>
    <tr>
        <td><?php echo $article[8]['refarticle']; ?></td>
        <td><?php echo $article[8]['nomarticle']; ?></td>
        <td><?php echo $article[8]['htarticle']; ?></td>
        <td><?php echo $quantiteArticle[8]; ?></td>
        <td><?php $ptArt9 = prixtotal($quantiteArticle[8],($article[8]['htarticle'])); echo $ptArt9; ?></td>
        <td><?php echo totalttc($ptArt9); ?></td>
    </tr>
    <tr>
        <td><?php echo $article[9]['refarticle']; ?></td>
        <td><?php echo $article[9]['nomarticle']; ?></td>
        <td><?php echo $article[9]['htarticle']; ?></td>
        <td><?php echo $quantiteArticle[9]; ?></td>
        <td><?php $ptArt10 = prixtotal($quantiteArticle[9],($article[9]['htarticle'])); echo $ptArt10; ?></td>
        <td><?php echo totalttc($ptArt10); ?></td>
    </tr>

</table>

        <table style="margin-top: 50px;">
            <tr>
                <th>Total HT</th>
                <td><?php $totalht = ($ptArt1)+($ptArt2)+($ptArt3)+($ptArt4)+($ptArt5)+($ptArt6)+($ptArt7)+($ptArt8)+($ptArt9)+($ptArt10); echo $totalht." €"; ?></td>
            </tr>
            <tr>
                <th>TVA 20%</th>
                <td><?php $totaltva = ($totalht * 0.2); echo $totaltva." €"; ?></td>
            </tr>
            <tr>
                <th>Total</th>
                <td><?php echo ($totalht + $totaltva)." €"; ?></td>
            </tr>
        </table>

<h3>2) Bon de commande avec articles, nombre d'articles et quantité de chaque article générés aléatoirement</h3>

<p class="contfichier"> - Contenu de la partie concernant le bon de commande avec articles, nombre d'articles et quantité de chaque article générés aléatoirement dans le fichier "index.php" :</p>

<pre>

&lt;div class=&quot;boncommande&quot;&gt;
&lt;header class=&quot;entete&quot;&gt;
   &lt;p&gt;MON ENTREPRISE
3 avenue de la republique
75012 Paris
   &lt;/p&gt;
   &lt;p&gt;Facture n&deg;&lt;?= rand(100,6000); ?&gt;

   Date : &lt;?= randomDate(); ?&gt;
   &lt;/p&gt;
   &lt;p&gt;&lt;?php $aleaclient = rand(0,5); echo $client[$aleaclient]['nomclient'];
   echo &quot;&lt;br/&gt;&quot;;
   echo &quot;Ref: &quot;.$client[$aleaclient]['refclient'];
   echo &quot;&lt;br/&gt;&quot;;
  echo $client[$aleaclient]['adresse']; ?&gt;
   &lt;/p&gt;
   &lt;button&gt;Imprimer cette page&lt;/button&gt;
&lt;/header&gt;

&lt;div class=&quot;tabcommande&quot;&gt;
&lt;?php
// echo tableauarticle($article);
?&gt;

&lt;table style=&quot;margin-top: 50px;&quot;&gt;
   &lt;tr&gt;
       &lt;th&gt;R&eacute;f&eacute;rence&lt;/th&gt;
       &lt;th style=&quot;width: 500px;&quot;&gt;D&eacute;signation&lt;/th&gt;
       &lt;th style=&quot;width: 200px;&quot;&gt;Prix unitaire (hors taxe)&lt;/th&gt;
       &lt;th&gt;Quantit&eacute;&lt;/th&gt;
       &lt;th style=&quot;width: 150px;&quot;&gt;Prix total&lt;/th&gt;
       &lt;th style=&quot;width: 200px;&quot;&gt;Total TTC&lt;/th&gt;
   &lt;/tr&gt;

   &lt;?php
   $httotal = 0;
   shuffle($article);
   for ($i=0;$i&lt;$nbligne;$i++) { ?&gt;
       &lt;tr&gt;
           &lt;td&gt;&lt;?php echo $article[$i]['refarticle']; ?&gt;&lt;/td&gt;
           &lt;td&gt;&lt;?php echo $article[$i]['nomarticle']; ?&gt;&lt;/td&gt;
           &lt;td style=&quot;text-align: end;&quot;&gt;&lt;?php $prixArt = $article[$i]['htarticle']; echo $prixArt.&quot; &euro;&quot;; ?&gt;&lt;/td&gt;
           &lt;td style=&quot;text-align: center;&quot;&gt;&lt;?php $qtArt = $quantiteArticle[$i]; echo $qtArt; ?&gt;&lt;/td&gt;
           &lt;td style=&quot;text-align: end;&quot;&gt;&lt;?php $ptArt = $qtArt * $prixArt; echo $ptArt.&quot; &euro;&quot;; ?&gt;&lt;/td&gt;
           &lt;td style=&quot;text-align: end;&quot;&gt;&lt;?php echo totalttc($ptArt).&quot; &euro;&quot;; ?&gt;&lt;/td&gt;
       &lt;/tr&gt;
   &lt;?php
   $httotal = $httotal + $ptArt; } ?&gt;
&lt;/table&gt;

&lt;table class=&quot;tabtotal&quot; style=&quot;margin-top: 50px;&quot;&gt;
       &lt;tr&gt;
           &lt;th&gt;Total HT&lt;/th&gt;
           &lt;td style=&quot;text-align: end;&quot;&gt;
           &lt;?php echo $httotal.&quot; &euro;&quot;; ?&gt;
           &lt;/td&gt;
       &lt;/tr&gt;
       &lt;tr&gt;
           &lt;th&gt;TVA 20%&lt;/th&gt;
           &lt;td style=&quot;text-align: end;&quot;&gt;
           &lt;?php $tvatotal = ($httotal * 0.2);
           echo $tvatotal.&quot; &euro;&quot;; ?&gt;
   &lt;/td&gt;
       &lt;/tr&gt;
       &lt;tr&gt;
           &lt;th&gt;Total&lt;/th&gt;
           &lt;td style=&quot;text-align: end;&quot;&gt;
           &lt;?php echo ($httotal + $tvatotal).&quot; &euro;&quot;; ?&gt;
           &lt;/td&gt;
       &lt;/tr&gt;
&lt;/table&gt;
&lt;/div&gt;

&lt;footer style=&quot;margin-top: 20px; padding-top: 50px; text-align: center&quot;&gt;
   T&eacute;l&eacute;phone : &lt;a href==#&quot;&gt;07 11 22 33 34&lt;/a&gt; - &lt;a href==#&quot;&gt;Email : moi@monentreprise.com&lt;/a&gt; - &lt;a href==#&quot;&gt;3, avenue de la R&eacute;publique&lt;/a&gt;
&lt;/footer
&lt;/div&gt;</pre>

<p class="resultat"> - Résultat :</p>

<div class="boncommande">
<header class="entete">
    <p>MON ENTREPRISE
3 avenue de la republique
75012 Paris
    </p>
    <p>Facture n°<?= rand(100,6000); ?>

    Date : <?= randomDate(); ?>
    </p>
    <p><?php $aleaclient = rand(0,5); echo $client[$aleaclient]['nomclient'];
    echo "<br/>";
    echo "Ref: ".$client[$aleaclient]['refclient'];
    echo "<br/>";
   echo $client[$aleaclient]['adresse']; ?>
    </p>
    <button>Imprimer cette page</button>
</header>

<div class="tabcommande">
<?php 
// echo tableauarticle($article); 
?>

<table style="margin-top: 50px;">
    <tr>
        <th>Référence</th>
        <th style="width: 500px;">Désignation</th>
        <th style="width: 200px;">Prix unitaire (hors taxe)</th>
        <th>Quantité</th>
        <th style="width: 150px;">Prix total</th>
        <th style="width: 200px;">Total TTC</th>
    </tr>

    <?php 
    $httotal = 0;
    shuffle($article);
    for ($i=0;$i<$nbligne;$i++) { ?>
        <tr>
            <td><?php echo $article[$i]['refarticle']; ?></td>
            <td><?php echo $article[$i]['nomarticle']; ?></td>
            <td style="text-align: end;"><?php $prixArt = $article[$i]['htarticle']; echo $prixArt." €"; ?></td>
            <td style="text-align: center;"><?php $qtArt = $quantiteArticle[$i]; echo $qtArt; ?></td>
            <td style="text-align: end;"><?php $ptArt = $qtArt * $prixArt; echo $ptArt." €"; ?></td>
            <td style="text-align: end;"><?php echo totalttc($ptArt)." €"; ?></td>
        </tr>
    <?php
    $httotal = $httotal + $ptArt; } ?>
</table>

<table class="tabtotal" style="margin-top: 50px;">
        <tr>
            <th>Total HT</th>
            <td style="text-align: end;">
            <?php echo $httotal." €"; ?>
            </td>
        </tr>
        <tr>
            <th>TVA 20%</th>
            <td style="text-align: end;">
            <?php $tvatotal = ($httotal * 0.2);
            echo $tvatotal." €"; ?>
    </td>
        </tr>
        <tr>
            <th>Total</th>
            <td style="text-align: end;">
            <?php echo ($httotal + $tvatotal)." €"; ?>
            </td>
        </tr>
</table>
</div>

<footer style="margin-top: 20px; padding-top: 50px; text-align: center">
    Téléphone : <a href==#">07 11 22 33 34</a> - <a href==#">Email : moi@monentreprise.com</a> - <a href==#">3, avenue de la République</a>
</footer
</div>

<h2>Fonction affichant l’âge de l’utilisateur avec une couleur différente sur le texte suivant l’âge de l’utilisateur</h2>

<p style="text-decoration: underline;">Contenu des fonctions :</p>

<pre>
&lt;?php
   function affiche_age(int $age) {
   $color=&quot;black&quot;;
   $marge = &quot;margin-top: 50px&quot;;
   // entre 0 et 10 ans =&gt; red
   // entre 11 et 20 ans =&gt; blue
   // entre 21 et 30 ans =&gt; yellow
   global $utilisateur;
   if ($age&lt;=10) {
       $color=&quot;red&quot;;
   } elseif ($age&gt;10 &amp;&amp; $age&lt;=20) {
       $color=&quot;blue&quot;;
   } elseif ($age&gt;20 &amp;&amp; $age&lt;=30)  {
       $color=&quot;yellow&quot;;
   }
   echo &quot;&lt;br/&gt;&lt;div style=color:&quot;.$color.&quot;;&gt;Vous avez &quot;.$age.&quot; ans.&lt;/div&gt;&lt;br /&gt;&quot;;
   }
affiche_age($age=14);
affiche_age($age=4);
affiche_age($age=24);
affiche_age($age=67);

function affiche_age2( $age) {
   $color=&quot;red&quot;;
   $colors=[
       &quot;red&quot;,
       &quot;green&quot;,
       &quot;grey&quot;,
       &quot;black&quot;,
       &quot;purple&quot;,
       &quot;yellow&quot;,
       &quot;pink&quot;,
       &quot;blue&quot;,
       &quot;orange&quot;,
       &quot;brown&quot;,
       &quot;violet&quot;,
       &quot;charcoal&quot;,
       &quot;turquoise&quot;];
   // En code on aime pas r&eacute;p&eacute;t&eacute; on fait des boucles...
   $agemin=0;
   $agemax=10;
   for ($i=0;$i&lt;12;$i++) {
       if (  $age &gt;= $agemin  &amp;&amp; $age &lt;=$agemax  ) {  $color=$colors[$i]; }
       $agemin=$i*10;
       $agemax=($i*10)+10;
   }
   global $utilisateur;
   echo &quot;&lt;br/&gt;&lt;div style=color:&quot;.$color.&quot;;&gt;&quot;.$age.&quot;&lt;/div&gt;&lt;br /&gt;&quot;;
}
affiche_age2($age=8);
affiche_age2($age=24);
affiche_age2($age=14);
affiche_age2($age=57);
affiche_age2($age=97);
affiche_age2($age=37);
?&gt;</pre>

<p class="resultat"> - Résultat :</p>

<?php 
    function affiche_age(int $age) {
    $color="black";
    $marge = "margin-top: 50px";
    // entre 0 et 10 ans => red
    // entre 11 et 20 ans => blue
    // entre 21 et 30 ans => yellow
    global $utilisateur;
    if ($age<=10) {
        $color="red";
    } elseif ($age>10 && $age<=20) {
        $color="blue";
    } elseif ($age>20 && $age<=30)  {
        $color="yellow";
    }
    echo "<br/><div style=color:".$color.";>Vous avez ".$age." ans.</div><br />";
    }
affiche_age($age=14);
affiche_age($age=4);
affiche_age($age=24);
affiche_age($age=67);

function affiche_age2( $age) {
    $color="red"; 
    $colors=[
        "red",
        "green",
        "grey",
        "black",
        "purple",
        "yellow",
        "pink",
        "blue",
        "orange",
        "brown",
        "violet",
        "charcoal",
        "turquoise"];
    // En code on aime pas répété on fait des boucles...
    $agemin=0;
    $agemax=10;
    for ($i=0;$i<12;$i++) {
        if (  $age >= $agemin  && $age <=$agemax  ) {  $color=$colors[$i]; }
        $agemin=$i*10;
        $agemax=($i*10)+10;
    }
    global $utilisateur;
    echo "<br/><div style=color:".$color.";>".$age."</div><br />";
}
affiche_age2($age=8);
affiche_age2($age=24);
affiche_age2($age=14);
affiche_age2($age=57);
affiche_age2($age=97);
affiche_age2($age=37);
?>

<?php include 'footer.php' ?>