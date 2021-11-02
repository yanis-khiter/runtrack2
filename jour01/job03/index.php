<?php
$booleen = true ;
$entier = 5 ;
$chaine = "Yanis" ;
$flottante = 2.5 ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job03</title>
</head>


<style>
    table {
        background-color: #dad3d2;
        width: 50%;
        height : 50%;
        text-align : center ;
        margin : 0 auto ;
        margin-top : 10%; 
    }

    td {
        border: 1px black solid;
    }

</style>


<body>

<table>

  <tr>
    <th>Type</th>
    <th>Nom</th>
    <th>Valeur</th>
  </tr>
 
  <tr>
    <td>Booléen</td>
    <td>MyBool</td>
    <td> <?= $booleen ?> </td>
  </tr>

  <tr>
    <td>Entier</td>
    <td>Chiffre</td>
    <td> <?= $entier ?> </td>
  </tr>

  <tr>
    <td>Chaîne</td>
    <td>Nom</td>
    <td> <?= $chaine ?> </td>
  </tr>

  <tr>
    <td>Flottante</td>
    <td>Virgule</td>
    <td> <?= $flottante ?> </td>
  </tr>

</table>

</body>
</html>