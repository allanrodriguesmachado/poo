<?php

/**
 *  Um Objeto é uma estrutura dinâmica originada com base em uma classe. Após a
 * utilização de uma classe para criar diversas estruturas iguais a ela, que 
 * interagem no sistema e possuem dados nela armazenadas, dizemos que estamos 
 * criando objetos, ou mesmo instanciando objetos de uma classe. Diz-se que o
 * objeto é uma instância de yna classe, por que o objeto existe durante um 
 * dado instante de tempo - da sua criação até a sua destruição. São objetos
 * da classe.
 * 
 * Para instanciar um objeto de uma determinada classe, procedemos para a 
 * declaração de uma variável qualquer(nosso objeto em questão) e lhe 
 * atribuímos o operador new seguido do nome da classe que desejamos
 * instanciar.
 * 
 *      ************************************                ************************************    
 *      *           Pessoa                 *  #####         *               Conta              *
 *      ************************************      #         ************************************   
 *      * Codigo: 10                       *      #         * Agencia: 6677                    *
 *      * Nome: Allan Rodirgues            *      #         * Codigo: CC. 1234.56              *
 *      * Altura: 1.85                     *      #         * DataDeCriacao: 10/07/02          *
 *      * Idade: 25                        *      ########  * Titular: Allan Rodrigues         *
 *      * Nascimento: 14/10/1967           *                * Senha: 123456                    *
 *      * Escolaridade: Ensino Médio       *                * Saldo: 900,00                    *
 *      * Salario: R$ 500,00               *                * Cancelada: false                 *
 *      ************************************                ************************************    
 *      * Crescer(Centimetros:interger)    *                * Retirar:(Quantia:float)          *
 *      * Formar(titulo: string)           *                * Depositar(Quantia:float)         *
 *      *Envelhecer(anos:integer)          *                * ObterSaldo()                     *
 *      ************************************                ************************************   
 * 
 */
