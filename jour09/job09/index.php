<?php

$bdd = mysqli_connect('localhost','root','', 'jour08');
mysqli_set_charset($bdd ,'utf8');
$requete = mysqli_query($bdd,"SELECT SUM(superficie) FROM `etage` ");

$etage = mysqli_fetch_all($requete,MYSQLI_ASSOC);

var_dump($etage);

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

                <th>superficie_totale</th>
               
            </tr>

    </thead> 

<tbody>

<?php

foreach($etage as $etages){

    echo '<tr><td>' .$etages['SUM(superficie)'].'</td></tr>';
 
}

?>

    </tbody>
</table>