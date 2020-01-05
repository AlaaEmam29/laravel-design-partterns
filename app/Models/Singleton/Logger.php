<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 1/5/2020
 * Time: 12:05 PM
 */

namespace App\Models\Singleton;


class Logger
{

    /**
     * Our single database client instance.
     *
     * @var Logger
     */
    private static $instance;

    private function __construct()
    {

    }

    /**
     * @return \App\Models\Singleton\Logger
     */
    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new Logger;
            dump('New instance');
        }else{
            dump('Old instance');

        }

        return static::$instance;
    }

    /**
     * @param $message
     */
    public function log($message){
        dump($message);
    }



}
