<?php

echo"Laço de repetição While"; 
echo"<hr>";


$i = 1 ;

while ( $i < 20) {
    echo "<br>" . $i;


    $res = ( $i < 18) ?"- Manor de Idade":"- Maior de idade";
    echo  $res ;  

   /* if( $i < 18 ) {
        echo "- Menor de Idade";

    } else {
        echo " -  Maior de Idade";
    }

*/

    $i++;   
}

