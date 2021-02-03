<?php

/**
 * A orientação a objetos e fundamental entender o conceito de classes e objetos.
 * Uma classe é uma estrutura que define um tipo de dados, podendo conter
 * atributos (variaveis) e tambem funções(metodos) para manipular
 * os atributos
 * 
 * 
 *  ---- Recomanda-se iniciar nomes de classes com letra maiúscula e
 * de preferência, envitar a utilização de caractere
 */

class Produto
{
    var $Codigo;
    var $Descricao;
    var $Preco;
    var $Quantidade;

    /**
     * A classe Produto tera uma funcionalidade adiconada ou um método
     * que é uma função declarada dentro da estrutura da classe, agindo
     * dentro desse escopo. O Método criado, ImprimeEtiqueta(), trabalha
     * com as propriedade do objeto. A fim de diferenciar propriedades de 
     * um objeto de variaveis locais, utiliza-se a pseudovariavel $this 
     * para representar o ojeto atual e acessar suas propriedades
     *
     */

    function ImprimeEtiqueta()
    {
        print 'Codigo: ' . $this->Codigo;
        print 'Descrição' . $this->Descricao;
    }
}
