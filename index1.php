<hr>

<?php


$x = 5 ;
$y = 5.0 ;
print("A soma é: ") ; 
echo($x + $y);

if($x == $y) {
    echo("<br>Os valores das variaveis são iguais") ;

} else  {
    echo ("<br> Os valores das variaveis são diferentes") ;
}

// if ($x === $y) {
  //  echo(" <br>As variaveis são identicas") ;
// } else {
  //  echo ("<br>As variaveis não são identicas") ;
 //}

switch ($x) {
    case $y:
        echo("<br> $x é igual a $y") ;
        break;
    case 1:
        echo("<br> O valor é igual a 1") ;
        break;
    default:
    echo ("Valor Padrão") ;
}


?>
<hr>
<?php
/*
for($i = 1; $i < 11 ; $i++) {
    echo("<br> $i") ;
}

echo("<hr>") ;

for($i = 1; $i < 11 ; $i+=2) {
    echo("<br> $i") ;
}

echo("<hr>") ;

for($i = 100; $i >0 ; $i-=2) {
    echo("<br> $i") ;
}
*/

$soma = 0 ;
$impar = 0;
for ($i = 1; $i <= 100 ; $i++) {
    if($i %2 == 0) {
        $soma += $i ;
    
  
    } else {
        $impar += $i ;
}
}

echo("<br> A soma do numeros pares de 1 a 100 é:  $soma") ;
echo("<br> A soma dos numeros impars de 1 a 100 é: $impar") ;

echo("<hr>") ;


$fatorial = 1;
for ( $i = 1; $i <= 5; $i++) {
   $fatorial *= $i ;
}

echo(" <br> O fatorial de 5 é : $fatorial") ;
