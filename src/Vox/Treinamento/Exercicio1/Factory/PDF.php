<?php

namespace Vox\Treinamento\Exercicio1\Factory;

/**
 * Description of PDF
 *
 * @author thomas
 */
class PDF implements CupomFiscalInterface
{

    public function imprime()
    {
        echo 'Imprimindo com PDF';
    }

}
