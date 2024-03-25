<?php

//Trabalhando com Arrays

$numeros = array(0,1,2,3,4,5,6,7,8,9);
$num = [0,1,2,3,4,5,6,7,8,9];
$semana = array("Domingo","Segunda","Terça","Quarta","Quinta","Sexta",
"Sábado");
    echo $semana[0];
    echo "<hr>";

//Funções embutidas
    echo count($semana);
    echo "<hr>";
    echo count($numeros);
    echo "<hr>";
    echo sizeof($semana);

/*Data - d = dia / m = mês / y e Y = ano
         h e H = hora/ i= minuto/ s = segundo
         a = define manhã/tarde
*/
date_default_timezone_set("America/Sao_Paulo");
$hoje = date("d/m/Y - H:i:s ");
    echo "<hr>";
    echo "Hoje é $hoje";







?>