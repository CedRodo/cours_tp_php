<?php require 'header.php' ?>
<?php require 'tpphp.php' ?>
<?php require 'articles.php' ?>
<?php require 'clients.php' ?>
<?php require 'fonctions.php' ?>

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

<h2 style="margin-top: 80px; margin-bottom: 50px;">Tableau des articles au complet</h2>

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
    <p><?php randomDate(); ?></p>

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

<h2 style="margin-top: 100px;">Bon de commande avec articles, nombre d'articles et quantité de chaque article générés aléatoirement</h2>

<div class="boncommande" style="height: 800px">
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
</footer>
</div>

<?php include 'footer.php' ?>