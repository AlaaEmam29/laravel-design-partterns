<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 12/11/2019
 * Time: 3:07 PM
 */

namespace App\Models\FactoryMethod;

use App\Contracts\FactoryMethod\Transport;

class Ship implements Transport
{

    public function drive()
    {
        dd("Ship Drive Method");
    }
}
