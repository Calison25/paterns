<?php
namespace App\Patterns\Strategy\Classes\Domain;

class MovieStrategy
{
    /** @var MovieInterface */
    private $movieStrategy;

    /**
     * MovieStrategy constructor.
     * @param string $movieType
     */
    public function __construct($movieType)
    {
        switch ($movieType) {
            case MovieType::ACAO:
                $this->movieStrategy = new Acao();
                break;
            case MovieType::COMEDIA:
                $this->movieStrategy = new Comedia();
                break;
            case MovieType::TERROR:
                $this->movieStrategy = new Terror();
                break;
            default:
                throw new \Exception('Padrão não implementado', 1591579049);
        }
    }

    public function getMovieAgeClassification()
    {
        return $this->movieStrategy->getClassificacao();
    }
}