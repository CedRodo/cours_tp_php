<?php

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
    <div class="tabbc">
    <table style="margin-top: 50px;">
    <tr>
        <th>Référence</th>
        <th style="width: 500px;">Désignation</th>
        <th style="width: 200px;">Prix unitaire (hors taxe)</th>
        <th>Quantité</th>
        <th style="width: 150px;">Prix total</th>
        <th style="width: 200px;">Total TTC</th>
    </tr>';
    $nbalea = rand(1,10);
    shuffle($art);
    $httotal = 0;
    for($i=0;$i<=$nbalea-1;$i++) {
    echo "<tr>";
    echo "<td>";
    echo $art[$i]['refarticle'];
    echo "</td>";
    echo "<td>";
    echo $art[$i]['nomarticle'];
    echo "</td>";
    echo '<td style="text-align: end;">';
    echo $art[$i]['htarticle']." €";
    echo "</td>";
    echo '<td style="text-align: center;">';
    $qtart = aleaquantite(8);
    echo $qtart;
    echo "</td>";
    echo '<td style="text-align: end;">';
    $htart = $art[$i]['htarticle']*$qtart;
    echo $htart." €";
    echo "</td>";
    echo '<td style="text-align: end;">';
    echo ($htart * 1.2)." €";
    echo "</td>";
    echo "</tr>";
    $httotal = $httotal + $htart;
    }
    
    echo '<table class="tabtotal" style="margin-top: 50px;">
        <tr>
            <th>Total HT</th>
            <td style="text-align: end;">';
            echo $httotal." €";
    echo '</td>
        </tr>
        <tr>
            <th>TVA 20%</th>
            <td style="text-align: end;">';
            $tvatotal = ($httotal * 0.2);
            echo $tvatotal." €";
    echo '</td>
        </tr>
        <tr>
            <th>Total</th>
            <td style="text-align: end;">';
            echo ($httotal + $tvatotal)." €";
    echo "</td>
        </tr>
        </table>
        </div>";
}

?>