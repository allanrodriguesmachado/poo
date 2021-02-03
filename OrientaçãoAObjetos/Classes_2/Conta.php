<?php

class Conta
{
    var $Agencia;
    var $Codigo;
    var $DataDeCriação;
    var $Titular;
    var $Senha;
    var $Saldo;
    var $Cancelada;

    /**
     * Método Retirar
     * diminui o Sando em $quantia
     */

    function Retirar($quantia)
    {
        if ($quantia > 0) {
            $this->Saldo -= $quantia;
        }
    }

    /**
     * Método Depositar
     * aumenta o Saldo em $quantia
     */

    function Depositar($quantia)
    {
        if ($quantia > 0) {
            $this->Saldo += $quantia;
        }
    }

    /**
     * Método ObterSaldo
     * retorna o Sando Atual
     */

    function ObterSaldo()
    {
        return $this->Saldo;
    }
}
