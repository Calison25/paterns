<?php

namespace App\Patterns\Singleton\Classes\Controller;

use App\Patterns\Singleton\Classes\Domain\Logger;

class SingletonController
{
    public function create()
    {
        Logger::create('Erro 1');
        Logger::create('Erro 2');
        Logger::create('Erro 3');
        Logger::create('Erro 4');
        Logger::create('Erro 5');

        Logger::showLogs();
    }
}