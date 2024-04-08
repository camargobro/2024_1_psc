<?php

include_once("clsVeiculo.php");

class Moto extends Veiculo{

    public $cilindradas, $partidaEletrica;

    public function __construct($marcaMoto, $modeloMoto, $cilindradas, $partidaEletrica){
        parent::__construct($marcaMoto, $modeloMoto);
        $this->partida = $partidaEletrica;
        $this->cilindradas = $cilindradas;
    }
    public function ligar(){
        echo "<h4>Moto Ligada!";
        }
    public function acelerar($velocidade){
        parent::acelerar($velocidade);
        }
        public function frear($valor){
        parent::frear($valor);
        return $this->$valor;
        }



        
}


    


