<?php



$paises = array("Brasil","Argentina","Uruguai","Paraguai","Peru","Chile","Bolivia",
"Equador","Colombia","Venezuela") ;


//Imprimir o laço com FOR : 


$size = count($paises) ;

echo"<br>Laço com FOR - PAISES <br>";


for ($i = 0; $i < $size ; $i++) {
    echo $paises[$i] . "<br>" ;
}

echo"<br>Laço com FOREACH - PAISES <br>";

foreach ($paises as $america) {
    echo $america ."<br>";
}