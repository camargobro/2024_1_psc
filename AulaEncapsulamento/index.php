<?php
include_once("clsBicicleta.php");
include_once("clsMotobike.php");



$bicicleta = new  Bicicleta("MinhaBike-001", "Caloi", "Azul");


echo $bicicleta->getId() . " da marca ". $bicicleta->getMarca() . "e da cor" .
 $bicicleta->getCor();

$bicicleta->andar ();

$motobike = new Motobike("Motobike", "Sundown", "Preta", 1);
echo "Estou e minha " . $motobike->getId() . "da marca" . $motobike->getmarca() . "de cor" . 
$motobike->getCor() . "na marcha" . $motobike->getMarcha();

$motobike->andar();
$motobike->mudarMarcha();
$motobike->frear();