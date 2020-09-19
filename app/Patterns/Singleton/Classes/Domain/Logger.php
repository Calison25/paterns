<?php

namespace App\Patterns\Singleton\Classes\Domain;


class Logger
{
    public static function create($message)
    {
        $now = new \DateTime();
        LoggerSingleton::getInstance()->create(['message' => $message, 'time' => $now->format('Y-m-d H:i:s')]);
    }

    public static function showLogs()
    {
        $logs = LoggerSingleton::getInstance()->getLogs();

        foreach ($logs as $log) {
            echo "Log message: {$log['message']} - Time: {$log['time']}" . PHP_EOL;
        }
    }
}