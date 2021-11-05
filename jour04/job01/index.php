<!-- Job 01

Développez un algorithme qui affiche le nombre d’arguments GET.
Tips : Pour tester, créez un formulaire html de type GET avec différents
input. -->

<?php

var_dump($_GET);

echo count($_GET);

?>

<form method="get">
<input type="text" name="user">
<input type="password" name="pasword">
<input type="submit" name="submit">

</form>

