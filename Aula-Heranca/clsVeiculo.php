<?php

class Veiculo{
//Atributos
    public $id, $marca, $modelo, $velocidade;

    public function __construct($marca, $modelo){
        $this->id = NULL;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidade = 0;
    }
//Métodos
    public function ligar(){
        echo "<h1>Veículo ligado!";
        echo "<br><h4>Modelo: " . $this->modelo ;
    }
    public function acelerar($velocidade){
        if($velocidade > 0){
            $this->velocidade += $velocidade;
        }
        
        return $this->velocidade;
        
    }
    public function frear($valor){
        if($valor > 0){
        
            if($valor <= $this->velocidade){
                $this->velocidade -= $valor;
            }else{
                $this->velocidade = 0;
        
            }

        }
        return $this->velocidade;
    }



}