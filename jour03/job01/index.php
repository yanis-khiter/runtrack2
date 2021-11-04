<?php

$nombre =[200, 204, 173, 98, 171, 404, 459];

for($x = 0; isset($nombre[$x]); $x++){ 


if   ($nombre[$x]%2 == 0){
    echo $nombre[$x].' est paire' .'<br/>';
}

elseif ($nombre[$x]%2 != 0){
    echo $nombre[$x].' est impaire' .'<br/>';
}

else{echo $nombre[$x].'<br>';

}

}



// 200 204 173 98 171 404 459