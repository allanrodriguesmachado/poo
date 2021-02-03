<?php

//Carregar as Classes
include_once 'Classes_2/Pessoa.php';
include_once 'Classes_2/Conta.php';

/**
 * Criando Objeto 
 */
$allan = new Pessoa;
$allan->Codigo = 10;
$allan->Nome = "Allan Rodrigues";
$allan->Altura = 1.80;
$allan->Idade = 25;
$allan->Nascimento = '14/10/1995';
$allan->Escolaridade = 'Ensino Superior';

echo "Manipulação do objeto Pessoa $allan->Nome";

echo "Eu Sou o {$allan->Nome} e tenho {$allan->Idade} anos,
Nasci em {$allan->Nascimento} e estou cursando o {$allan->Escolaridade},
e tenho uma altura de {$allan->Altura}";

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

/**
 * Criando Conta
 */

$minhaConta = new Conta;
$minhaConta->Agencia = 6777;
$minhaConta->Codigo = "CC. 123.56";
$minhaConta->DataDeCriação = "02/02/2021";
$minhaConta->Titular = "Allan Rodrigues";
$minhaConta->Senha = 123456;
$minhaConta->Saldo = 900.00;
$minhaConta->Cancelada = false;

echo "Manipulação do objeto Conta $minhaConta->Titular";


echo "Minha agencia é {$minhaConta->Agencia}, Código {$minhaConta->Codigo} 
A criação da minha conta foi {$minhaConta->DataDeCriação}, Eu {$minhaConta->Titular}
Sou o titular da conta, minha senha é {$minhaConta->Senha}, e tenho na minha R$ {$minhaConta->Saldo}";
