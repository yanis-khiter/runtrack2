<?php

for($x = 0; $x <= 100; $x++){ 

    
    // MODULO 3

    if ($x%3 == 0){
        echo 'Fizz<br/>';
    }

    else{
        echo $x. '<br/>' ;
    }

    // MODULO 5

    if ($x%5 == 0){
        echo 'Buzz<br/>';
    }

    else{
        echo $x. '<br/>' ;
    }    

    // MODULO 3 et 5


}


