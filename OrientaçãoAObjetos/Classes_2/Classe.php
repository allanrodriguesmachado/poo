<?php

/**
 * A Classe é uma estrutura estática utilizada para descrever objetos
 * mediante atributos (propriedades) e métodos(funcionalidades). A
 * classe é um modelo ou template para criação desse objetos. Tem-se
 * por propriedades características intrínsecas á classe em questão
 * 
 * Podem ser classes:entidades do negócio da aplicação(pessoa, conta,
 * cliente, fornecedor), entidades de interface(janela, botão, painel,
 * frame, barra), (conexão com banco de dados, um arquivo-texto, um 
 * arquivo XML, uma conexão SSH, uma conexão FTP, um Web Service)
 * 
 *      ************************************                ************************************    
 *      *           Pessoa                 *  #####         *               Conta              *
 *      ************************************      #         ************************************   
 *      * Codigo: integer                  *      #         * Agencia: integer                 *
 *      * Nome: string                     *      #         * Codigo: string                   *
 *      * Altura: integer                  *      #         * DataDeCriacao: date              *
 *      * Idade: integer                   *      ########  * Titular: Pessoa                  *
 *      * Nascimento: date                 *                * Senha: String                    *
 *      * Escolaridade: string             *                * Saldo: float                     *
 *      * Salario: float                   *                * Cancelada: boolean               *
 *      ************************************                ************************************    
 *      * Crescer(Centimetros:interger)    *                * Retirar:(Quantia:float)          *
 *      * Formar(titulo: string)           *                * Depositar(Quantia:float)         *
 *      *Envelhecer(anos:integer)          *                * ObterSaldo()                     *
 *      ************************************                ************************************   
 * 
 * As Classes São orientadas ao assunto, ou seja cada classe é responsavel por um
 * assunto diferente e possui responsabilidade sobre o mesmo. Ela dever proteger
 * o acesso ao conteúdo por meio de mecanismo como o de encapsulamento. Dessa forma,
 * criamos sistemas mais confiaveis e robustos.
 * 
 * Os memboros de uma class são declarados na ordem: primeiro as propriedades
 * (mediante o operador var)e, em seguida, os métodos (pelo operador function,
 * também utilizado para declarar funções).
 */
