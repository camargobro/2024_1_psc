<?php

include("clsCidade.php");
include_once("clsPessoa.php");
include_once("clsProduto.php");
include_once("clsCategoria.php");

$c1 = new Cidade();
$c2 = new Cidade("Porto Alegre");

$p1 = new Pessoa(1 , "João");
$p2 = new Pessoa(2 , "Maria" , 1.75);
$p3 = new Pessoa(3 , "José" , 1.81 , $c1);
$p4 = new Pessoa(4 , "Júlia" , 1.75 , $c2);
$p5 = new Pessoa(5 , "Suzy" , 1.70 , new Cidade() );
$p6 = new Pessoa(5 , "Iracema" , 1.70 , new Cidade("Cacequí") );

echo ("<br>" . $p1->nome." - ". $p1->cidade->nome);
echo ("<br>" . $p2->nome." - ". $p2->cidade->nome);
echo ("<br>" . $p3->nome." - ". $p3->cidade->nome);
echo ("<br>" . $p4->nome." - ". $p4->cidade->nome);
echo ("<br>" . $p5->nome." - ". $p5->cidade->nome);
echo ("<br>" . $p6->nome." - ". $p6->cidade->nome . "<hr>");

$cat1 = new Categoria();
$cat2 = new Categoria("Salgadinhos");

$pdt1 = new Produto(1 , "Água" );
$pdt2 = new Produto(1 , "Coca-Cola" , 15.50);
$pdt3 = new Produto(1 , "Fandangos" , 13.50 , 5 , $cat1);
$pdt4 = new Produto(1 , "Lay's" , 17.50 , 10 , $cat2);

echo ("<br>" . $pdt1->nome . "Preço: " . $pdt1->preco . "Quantidade: ". "Categoria: " . $pdt1->cat->nome);
echo ("<br>" . $pdt2->nome . "Preço: " . $pdt2->preco . "Quantidade: ". "Categoria: " . $pdt2->cat->nome);
echo ("<br>" . $pdt3->nome . "Preço: " . $pdt3->preco . "Quantidade: ". "Categoria: " . $pdt3->cat->nome);
echo ("<br>" . $pdt4->nome . "Preço: " . $pdt4->preco . "Quantidade: ". "Categoria: " . $pdt4->cat->nome);





?>