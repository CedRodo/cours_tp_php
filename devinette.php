<?php


//----------------------------------------------Programme principal---------------------------------------------------

echo " Bienvenue , L'ordinateur va tenter de deviner quel chiffre a ete aleatoirement généré <br/><br/><br/> " ;


//while(1)

     

    $nb_ran=rand(1,100);
    $nb_chance = 100;

    while($nb_chance > 0)
    {

     $nb_test = rand(1,100);
     deviner_nb($nb_test);
     echo "valeur proposée" .$nb_test. "";
    }






//SOUS PROGRAMME PERMETTANT DE TENTER DE TROUVER LA VALEUR  GENEREE ALEATOIREMENT ---------------------------------
    
    function deviner_nb($nb_alea)  : INT
 {

 global $nb_ran;
 global $nb_chance;


// LA BONNE VALEUR A ETE TROUVEE 
   
    if($nb_alea == $nb_ran )
    {
    
        echo  "Bravo vous avez trouvé la bonne valeur qui etait" .$nb_ran. " " ;
        
    }


// LA BONNE VALEUR N'A PAS ETE TROUVEE 
    else

    {


    switch ($nb_alea)
    {
    case ($nb_ran <= 10) :
    echo    " recommencez s'il vous plait !!!  intervalle [0,10]  <br/>" ;
    break;
    
    case (($nb_ran >= 11) && ($nb_ran <= 20)) :
    echo " recommencez s'il vous plait !!!  la valeur se trouve dans l'intervalle [10,20] <br/>  " ;
    break;
    
    case (($nb_ran > 20) && ($nb_ran <= 30)) :
    echo " recommencez s'il vous plait !!!  la valeur se trouve dans l'intervalle [20,30]  <br/>" ;
    break;

    case (($nb_ran >= 31) && ($nb_ran <= 40)) :
    echo " recommencez s'il vous plait !!!  la valeur se trouve dans l'intervalle [30,40] <br/>" ;
    break;

    case (($nb_ran >= 41) && ($nb_ran <= 50)):
    echo " recommencez s'il vous plait !!!  la valeur se trouve dans l'intervalle [40,50] <br/> " ;
    break;

    case (($nb_ran >= 51) && ($nb_ran <= 60)) :
    echo " recommencez s'il vous plait !!!  la valeur se trouve dans l'intervalle [50,60] <br/>" ;
    break;

    case (($nb_ran >= 61) && ($nb_ran <= 70)) :
    echo " recommencez s'il vous plait !!!  la valeur se trouve dans l'intervalle [60,70] <br/>" ;
    break;

    case (($nb_ran >= 71) && ($nb_ran <= 80)) :
    echo " recommencez s'il vous plait !!!  la valeur se trouve dans l'intervalle [70,80] <br/>" ;
    break;

    case (($nb_ran >= 81) && ($nb_ran <= 90)) :
    echo " recommencez s'il vous plait !!!  la valeur se trouve dans l'intervalle [80,90] <br/>" ;
    break;

    case (($nb_ran >= 91) && ($nb_ran <= 100)) :
    echo " recommencez s'il vous plait !!!  la valeur se trouve dans l'intervalle [90,100] <br/> " ;
    break;  
          
    }

    --$nb_chance;


    if  ( $nb_chance > 0)
    
    {

    echo "il vous reste encore " .$nb_chance. " chances " ; 

    }   

    else
    {   
    
        echo "il ne vous reste plus de credit , vous avez perdu valeur à trouver " .$nb_ran. "" ;
        
    
    }

}

return $nb_alea;

}

//------------FIN SOUS PROGRAMME ---------------------------------------------------



?>





