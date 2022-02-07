<?php

function multNombre(int $nb) {
    echo "<br/>";
    echo "La table de multiplication de $nb : <br/><br/>";

    for($i=1; $i<=10; $i++) {
            echo "$nb x $i = ".$nb * $i;
            echo "<br/><br/>";
        }
    }

function etoiles(int $nb) {
    echo "Le carré de $nb étoiles : <br/><br/>";
    for($i=1; $i<=$nb; $i++) {
        for($e=1; $e<=$nb; $e++) {
            echo "*";
            }
        echo "<br/>";
        }
    }

function somme(int $nb) {
    $somme=0;
    
    if ($nb > 0) {

        for($i=1; $i<$nb; $i++) {

            $somme = $somme + $i;
            echo "$i + "; 
            }
        $somme = $somme + $i;
        echo "$i = ".$somme;
        } else {
        return $nb;
        }
    }

function ajouttva(float $prix,float $tva) {
    $prixTva = $prix + $prix * $tva;
    echo "Le prix HT est $prix €<br/><br/>";
    echo "La TVA est de $tva<br/><br/>";
    echo "Le prix avec la TVA est ";
    return $prixTva." €";
    }

function factorielle(int $nb) {

    $resultat = 1;
    
    echo "La factorielle de 5 est ";
    
    for($i=5; $i>1; $i--) {
    
        $resultat = $resultat * $i;
        echo "$i x "; 
    }
    
    echo "$i = ";
    return $resultat;
    
    }

function echangeVar($var1,$var2) {
    $tampon = $var1;
    $var1 = $var2;
    $var2 = $tampon;
    echo $var1." ".$var2;
}

function pairimpair(int $nb) {
    if ($nb % 2 == 0) {
        return "Le nombre $nb est pair.";
    }
    else {
        return "Le nombre $nb est impair.";
    }   
}

function bonjour(string $prenom,string $nom){
    echo "Bonjour ".$prenom." ".$nom."";
    } 

function jeudunombre(int $tours,int $nbchances,int $minimum,int $maximum) {

// FONCTION jeudunombre(<nombre de tours>, <nombre de chances par tour>, <minimum du nombre à trouver>, <maximum du nombre à trouver>)
// <...> : entier à entrer
    
    $nbtours = 0;

    $nbchancestotales = $nbchances;

    $min = $minimum;
    
    $max = $maximum;

    while ($nbtours != $tours) {

        $nbtours++;

        echo "<hr><br/>Tour n°$nbtours<br/><br/><hr><br/>";

        $nbcorrect = rand($min,$max);

        echo "Le nombre à deviner est : * $nbcorrect *<br/><br/>";

        $nbcpu = rand($min,$max);

        echo "Nombre de tentatives possibles du CPU : $nbchancestotales<br/><br/>";

        echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br/><br/>";


        do {

            echo "Chance(s) restante(s) : $nbchances<br/><br/><br/>";
        
            $nbcpu = rand($min,$max);

            echo "Tentative n°".($nbchancestotales-$nbchances+1)."<br/><br/><br/>";

            echo "Nombre proposé par le CPU : $nbcpu<br/><br/>";

                if ($nbcpu > $nbcorrect) {

                    echo "> Le nombre à deviner est plus petit <"."<br/><br/>";

                    $max = $nbcpu-1;

                } else if ($nbcpu < $nbcorrect) {

                    echo "> Le nombre à deviner est plus grand <"."<br/><br/>";

                    $min = $nbcpu+1;
                }

            echo "-----------------------------------------------<br/><br/>";

            $nbchances--;

        }

        while (($nbcpu != $nbcorrect) && ($nbchances > 0));

        if ($nbchances == ($nbchancestotales - 1)) {
            
            echo "BRAVO ! Le nombre a été trouvé du premier coup !<br/><br/>";

            $nbchances = $nbchancestotales;

            $min = $minimum;

            $max = $maximum;

        } else if (($nbchances >= 0) && ($nbchances < $nbchancestotales) && ($nbcpu == $nbcorrect)) {

            echo "BRAVO ! Le nombre a été trouvé !<br/><br/>";

            $nbchances = $nbchancestotales;

            $min = $minimum;

            $max = $maximum;

        } else {

            echo "PERDU... Le nombre de chances est épuisé.<br/><br/>";

            $nbchances = $nbchancestotales;

            $min = $minimum;

            $max = $maximum;
            
        }

    }

}

?>

