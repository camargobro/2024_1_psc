<?php

class Categoria{

    public $id, $nome;

public function __construct($nome = "Outra"){
     $this->nome = $nome;
     $this->id = null;

    }
}


?>