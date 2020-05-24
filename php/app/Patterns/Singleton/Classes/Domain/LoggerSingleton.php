<?php

namespace App\Patterns\Singleton\Classes\Domain;


class LoggerSingleton
{
    private static $instance = null;
    /** @var array */
    protected $logs;

    private function __construct(){}

    public static function getInstance()
    {
        return self::$instance ?? self::$instance = new self;
    }

    public function create($data)
    {
        $this->logs[] = $data;
    }

    public function getLogs()
    {
        return $this->logs;
    }
}