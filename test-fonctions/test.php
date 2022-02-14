<?php 

function operation(int $nb1,int $nb2, int$nb3) {
    $somme = sommeNbs($nb1,$nb2);
    return multpNbs($somme,$nb3);
}

function sommeNbs(int $nbSomme1,int $nbSomme2) {
        return $nbSomme1 + $nbSomme2;
}

function multpNbs(int $nbMultp1,int $nbMultp2) {
    return $nbMultp1 * $nbMultp2;
}

echo operation(2,3,6);

?>
