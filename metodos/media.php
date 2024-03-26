<?php
//Cálculo da média

$nota1 = 9;
$nota2 = 8.4;
$nota3 = 9;
$nota4 = 6;

function media($a1, $a2, $a3, $a4) {
    $media = ($a1 + $a2 + $a3 + $a4) / 4;
        echo "Média final é de: $media";
}
//Ou
function media2($a1, $a2, $a3, $a4){
    $notas = array($a1, $a2, $a3, $a4);
    $soma = array_sum($notas);
    $media = $soma / sizeof($notas);
        echo "<hr>Média final é de: $media";
}
//Chamada do método
    media($nota1, $nota2, $nota3, $nota4);
    media2($nota1, $nota2, $nota3, $nota4);




?>