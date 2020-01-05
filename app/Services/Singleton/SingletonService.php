<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 1/5/2020
 * Time: 12:09 PM
 */

namespace App\Services\Singleton;


use App\Models\Singleton\Logger;

class SingletonService
{

    public function __construct(Logger $logger,$message)
    {
        $logger->log($message);
    }
}
