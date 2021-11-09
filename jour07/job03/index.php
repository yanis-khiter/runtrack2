<!-- Job 03

Créez un formulaire qui contient un input de type de text nommé “prenom”
et un bouton submit. Lorsque l’on valide le formulaire, le prénom est ajouté
dans une variable de session. Afficher l’ensemble des prénoms.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste. -->

<?php

session_start();
var_dump($_SESSION)

?>

<form action=";/index.php" method="post">
        
    <label for="last-name">prenom </label>
    <input type="text" id="prenom" name="prenom">
    <input type="submit" name="reset" value="envoyer">
    <input type="submit" name="reset" value="reset">

</form>


