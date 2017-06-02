<?php

namespace PetShop;

/**
 *
 * Logger class to log information
 *
 * This class logs information to an array within.
 *
 * Class Logger
 *
 *
 * @package PetShop
 */
class Logger
{

    /**
     * @var static array $logInfo
     */
    private static $logInfo = [];

    /**
     * Adds information to logInfo array
     * @param $message
     */
    public static function log($message)
    {
        array_push(self::$logInfo, $message);
    }

    /**
     * Returns logInfo
     * @return Logger
     */
    public static function getLogInfo()
    {
        return self::$logInfo;
    }

    /**
     * @param float $start
     * @param float $end
     * @return float
     */
    public static function getExecutionTime($start, $end)
    {

        $executionTime = ($end - $start);

        //return in milli seconds
        return ($executionTime * 1000);
    }

}