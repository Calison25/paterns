<?php
namespace App\Patterns\Strategy\Classes\Domain;

class Comedia implements MovieInterface
{
    public function getClassificacao()
    {
        return 8;
    }
}