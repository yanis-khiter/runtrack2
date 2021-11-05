<!-- Job 03

Créez une string nommée str et affectez y “I'm sorry Dave I'm afraid I can't
do that”. Créez un algorithme qui parcourt cette chaîne et affiche
uniquement les voyelles -->


<?php

$str = "I'm sorry Dave I'm afraid I can't do that" ;

$voy = "aeIiouy";


    for($ind = 0; isset($str[$ind]); $ind++){

    for($tik = 0; isset($voy[$tik]); $tik++)

    if($str[$ind] == $voy[$tik])

    echo $voy[$tik] ;

    }


?>


