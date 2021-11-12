<?php

$bdd = mysqli_connect('localhost','root','', 'jour08');
mysqli_set_charset($bdd ,'utf8');
$requete = mysqli_query($bdd,"SELECT * FROM salles ORDER BY capacite ASC ");

$salles = mysqli_fetch_all($requete,MYSQLI_ASSOC);

var_dump($salles);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>


<body>

  <table>

    <thead>
            <tr>

                <th>id</th>
                <th>nom</th>
                <th>id_etage</th>
                <th>capacite</th>
           
            </tr>

    </thead> 

<tbody>

<?php

foreach($salles as $salle){

    echo '<tr><td>' .$salle['id'].'</td>';
    echo '<td>' .$salle['nom'].'</td>';
    echo '<td>' .$salle['id_etage'].'</td>';
    echo '<td>' .$salle['capacite'].'</td></tr>';

 
}

?>

    </tbody>
</table>