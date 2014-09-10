<?php

namespace Vox\Treinamento\Exercicio1\Factory;

use Vox\Treinamento\Exercicio1\Pedido;

/**
 * Description of ImpressoraFactory
 *
 * @author thomas
 */
class ImpressoraFactory
{

    protected $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = Pedido::getValor();
    }

    public function render(CupomFiscalInterface $cupom)
    {
        return CupomFiscalInterface($this->pedido);
    }

}
