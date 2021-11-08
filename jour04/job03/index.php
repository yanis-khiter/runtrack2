<!-- Job 03

Développez un algorithme qui affiche le nombre d’arguments POST.
Tips : Pour tester, créez un formulaire html de type POST avec différents
input. -->

<?php

var_dump($_POST);

echo count($_POST);

?>

<form method="post">
<input type="text" name="user">
<input type="password" name="pasword">
<input type="submit" name="submit">

</form>