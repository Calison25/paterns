<?php
namespace App\Patterns\Strategy\Classes\Domain;

class Acao implements MovieInterface
{
    public function getClassificacao()
    {
        return 15;
    }

}