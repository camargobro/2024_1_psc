<?php
//Funções


//Método que recebe parâmetro e tem retorno
function somar($x , $y){
    return $x + $y;
}
//Metódo que NÃO recebe parâmetro e NÃO possui retorno
function imprimirmeunome(){
    echo "Gustavo Camargo Rodrigues";
}
//Método que NÃO recebe parâmetro e possui retorno
function getPI(){
    return 3.14;
}
//Método que recebe parâmetro e NÃO possui retorno
function imprimirAreaCirculo($raio){
    $area = getPI() * $raio * $raio;
    echo "<hr> A área do círculo com raio é: " . $area. "m²";
}

imprimirmeunome();

$result = somar (5.1,10.0);
    echo "<hr>Resultado:" . $result;

    echo "<hr> Valor do PI: " . getPI();
imprimirAreaCirculo(10);
imprimirAreaCirculo(5);


?>