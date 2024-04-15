<?php
require_once("clsBicicleta.php");

class Mountainbike extends Bicicleta{
    public $marcha;

    public function __construct($id, $marca, $cor){
        parent::__construct($id, $marca, $cor);
        $this ->marcha = $marcha;
    }

    public function getMarcha() {return $this->marcha;}
    public function setMarcha( $marcha): void {$this->marcha = $marcha;}

	
	
    public function mudarMarcha($marcha){
        echo "Bicicleta na marcha $marcha";
    }



}