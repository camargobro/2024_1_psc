<?php

echo"Laço de repetição FOR <br>";


$frutas = array("Macã","Banana","Pera","Uva","Tangerina","Caju",
"Morango","fruta 1","Fruta2","Fruta 3","Fruta 4",) ;

$size = count($frutas);


for ($i = 0; $i < $size; $i++) {
    echo $frutas[$i ] ."<br";
}

