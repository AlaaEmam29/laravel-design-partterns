<?php

namespace App\Contracts\AbstractFactory;

/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 12/24/2019
 * Time: 4:30 PM
 */
interface AbstractFactory
{
    public function getShape(String $shape): Shape;
}
