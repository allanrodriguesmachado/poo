<?php

//Insere a classe
include_once  'Classes_1/Produto.Class.php';

//Criar um Objeto
$produto1 = new Produto;


//Atribuir Valores
$produto1->Codigo = 500;
$produto1->Descricao = 'Teclado gamer';

$produto1->ImprimeEtiqueta();
var_dump($produto1);





//Criar um objeto
$produto2 = new Produto;

$produto2->Codigo = 500;
$produto2->Descricao = 'Teclado gamer';

$produto2->ImprimeEtiqueta();
var_dump($produto2);
