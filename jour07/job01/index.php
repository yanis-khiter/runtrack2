<!-- // Job 01

// Créez une variable de session nommée “nbvisites”. A chaque fois que la
// page est visitée, ajoutez 1. Afficher le contenu de cette variable.
// Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->



<?php

  // Démarrage ou restauration de la session
  session_start();


        echo $_SESSION ['nbvisites'] = $_SESSION ['nbvisites']+1 ; 

        if(isset($_POST['reset']))
        
        {session_unset() ;}

?>

<form action="" method="post">
<input type="submit" name="reset" value="reset" >
</form>
