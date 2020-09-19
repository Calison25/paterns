<?php
namespace App\Patterns\Strategy\Classes\Domain;

class Terror implements MovieInterface
{
    public function getClassificacao()
    {
        return 18;
    }

}