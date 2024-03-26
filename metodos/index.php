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
    echo "<br>A área do círculo com raio é: " . $area. "m²";
}

imprimirmeunome();
if( isset($_GET["x"])){
    $v1 = $_GET["x"];
}else{
    $v1 = 0;
}
if( isset($_GET["y"]))
    $v2 = $_GET["y"];
else
    $v2 = 0;

isset($_GET["r"]) ? $raio = $_GET["r"] : $raio = 0;

/* Ou 
$v1 = $_GET["x"];
$v2 = $_GET["y"];
$raio2 = $_GET["r"];
*/

$result = somar ($v1,$v2);
//$result = somar (5.1,10.0);
    echo "<hr>Resultado:" . $result;

    echo "<hr> Valor do PI: " . getPI();
imprimirAreaCirculo(10);
imprimirAreaCirculo(5);


?>