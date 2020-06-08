<?php

namespace App\Patterns\Strategy\Classes\Controller;

use App\Patterns\Strategy\Classes\Domain\MovieStrategy;

class StrategyController
{
    public function create()
    {
        $movie = new MovieStrategy('livre');
        var_dump($movie->getMovieAgeClassification());
    }
}