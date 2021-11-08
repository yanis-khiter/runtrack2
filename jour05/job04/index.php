<!-- Job 04

Créez une fonction nommée “calcule” qui prend 3 paramètres : le premier,
“a”, est un nombre, le deuxième, “operation”, est un caractère contenant le
type d’opération (+, -, *, /, %), le troisième, “b”, est un nombre. La fonction
doit retourner le résultat de l’opération.

1er = A > Nombre
2eme = OPERATION > Caractère : +, -, *, /, %
3eme = B > Nombre

LA FONCTION DOIT RETOURNER LE RESULTAT DE L'OPERATION -->


<?php

function calcule ($a, $operation, $b) {


        if ($operation == '+'){
        $resultat = $a + $b ;}

    elseif ($operation == '-'){    
        $resultat = $a - $b ;}   

    elseif ($operation == '*'){
        $resultat = $a * $b ;}

    elseif ($operation == '/'){
        $resultat = $a / $b ;}

    elseif ($operation == '%'){
        $resultat = $a % $b ;}

        else {$resultat = 'opérateur inconnu';}


return $resultat;

}

echo calcule (160,'+', 50);



// On peux aussi utiliser la méthode 'Switch-Case'

