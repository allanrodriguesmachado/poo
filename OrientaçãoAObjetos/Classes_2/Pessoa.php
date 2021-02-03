<?php

class Pessoa
{

    var $Codigo;
    var $Nome;
    var $Altura;
    var $Idade;
    var $Nascimento;
    var $Escolaridade;
    var $Salario;

    /**
     * Métodos Crescer
     * Aumenta a altura em $Centimetros
     */

    function Crescer($Centimetros)
    {
        if ($Centimetros > 0)

            $this->Altura += $Centimetros;
    }


    /**
     * Método Formar
     * Alterar a Escolaridade para $titulação
     */

    function Formar($titulação)
    {
        $this->Escolaridade = $titulação;
    }

    /**
     * Método Envelhecer
     * Aumenta a Idade em $anos
     */

    function Envelhecer($anos)
    {
        if ($anos > 0) {
            $this->Idade += $anos;
        }
    }
}
