 <?php

 class Carro{
    public $ano;
    public $marca;
    public $modelo;
    public $cor;
    public $cambio;

    public function __construct($ano, $marca, $modelo, $cor, $cambio){
        $this->ano = $ano;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->cambio = $cambio;
    }
    
//metodos
public function status(){

    echo "<h2> Dados do veiculo </h2>";
    echo "<p> Ano: ". $this->ano . " </p> ";
    echo "<p> Marca: ". $this->marca . " </p> ";
    echo "<p> Modelo: ". $this->modelo . " </p> ";
    echo "<p> Cor: ". $this->cor . "</p> ";
    echo "<p> Cambio: ". $this->cambio . "</p> ";
 }
public function vender($valor){
 echo $this->marca . " " . $this->modelo .  " Vendido por: " . $valor;
}

public function contar($carros){
   return count($carros);
    echo "<hr>";
}

}