<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 12/11/2019
 * Time: 2:58 PM
 */

namespace App\Services\FactoryMethod;


use App\Contracts\FactoryMethod\Transport;

class TransportService
{
    private $transport;

    public function __construct(Transport $transport)
    {
        $this->transport = $transport;
        $this->transport->drive();
    }
}
