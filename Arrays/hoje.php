<?php

date_default_timezone_set("America/Sao_Paulo");

//Array do dia da semana
    echo "DATA EM PORTUGUÊS: <br><br>";
$semana = array("Domingo","Segunda-Feira","Terça-Feira",
                "Quarta-Feira","Quinta-Feira",
                "Sexta-Feira","Sábado");

$meses = array("","Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto",
                "Setembro","Outubro","Novembro","Dezembro");

$dia_da_semana = date("w");
$dia = date("d");
$mes = date("n");
$ano = date("Y");
    echo "Bom dia! Hoje é " . $semana[$dia_da_semana] . ", " . $dia . " de " . $meses[$mes] . " de " . $ano . ".";

    echo "<hr> DATA EM INGLÊS: <br><br>"; 
    echo "Good Morning! Today is " . date('D') . ", " . date('d') . " of " . date('M') . " of " . date('Y') . ".";




?>