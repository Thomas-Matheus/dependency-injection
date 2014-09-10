<?php

namespace Vox\Treinamento\Exercicio1;

use Vox\Treinamento\Exercicio1\Exception\LimiteAdiconalException;
use Vox\Treinamento\Exercicio1\Factory\ImpressoraFactory;

/**
 * Description of Pedido
 *
 * @author thomas
 */
class Pedido implements \SplSubject
{

    protected $produtos;
    protected $listeners;
    
    function __construct()
    {
        $this->produtos = new ArrayList();
        $this->listeners = new ArrayList();
    }

    public function addProduto(ProdutoInteface $produtos)
    {
        if ($this->produtos->addAdicional->count() == 4) {
            throw new LimiteAdiconalException("Limite de Adicionais alcançado");
        }
        
        $this->produtos->add($produtos);
    }

    public function imprimir()
    {
        $this->notify();
    }

    public function attach(\SplObserver $observer)
    {
        $this->listeners->add($observer);
        return $this;
    }

    public function detach(\SplObserver $observer)
    {
        $this->listeners->remove($observer);
        return $this;
    }

    public function notify()
    {
        foreach ($this->listeners as $listener) {
            $listener->update($this);
        }
    }

}
