<!-- Job 02

Créez un cookie nommée “nbvisites”. A chaque fois que la page est visitée,
ajoutez 1. Afficher le contenu du cookie.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->


<?php

$value=1;


    setcookie("nbvisites", $value, time()+5);

    if (isset($_POST['reset'])) {
    
        echo '0';

        unset($_COOKIE['nbvisites']);

    }

    
    if(isset($_COOKIE['nbvisites'])){

        setcookie ('nbvisites',$_COOKIE['nbvisites']+1);

        echo ($_COOKIE['nbvisites']) ;

    }


?>


<form action="" method="post">
<input type="submit" name="reset" value="reset" >
</form>

