<?php

include_once("clsVeiculo.php");

class Carro extends Veiculo{
    public $portas;

    public function __construct($marcaCarro, $modeloCarro, $portas){
        //$this->marca = $marcaCarro;
        parent::__construct($marcaCarro, $modeloCarro);
        $this->portas = $portas;
    }
    public function ligar(){
        parent::ligar();
        echo "<br><h4>Carro ligado!";

    }   

}






