<?php

namespace Vox\Treinamento\Exercicio1;

use Vox\Treinamento\Exercicio1\Adicionais\AdicionalInterface;

/**
 * Description of Cafe
 *
 * @author thomas
 */
class Cafe implements ProdutoInteface
{

    protected $adicionais;
    protected $valor;

    public function getValor()
    {
        return $this->valor;
    }

    public function addAdicional(AdicionalInterface $adicional)
    {
        $this->adicionais = $adicional;
        return $this;
    }

}
