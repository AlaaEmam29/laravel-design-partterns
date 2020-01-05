<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 12/11/2019
 * Time: 3:06 PM
 */

namespace App\Models\FactoryMethod;

use App\Contracts\FactoryMethod\Transport;

class Truck implements Transport
{

    public function drive()
    {
       dd("Truck Drive Method");
    }
}
