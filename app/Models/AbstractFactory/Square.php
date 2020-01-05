<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 12/24/2019
 * Time: 4:29 PM
 */

namespace App\Models\AbstractFactory;


use App\Contracts\AbstractFactory\Shape;

class Square implements Shape
{

    public function draw()
    {
        dump('draw square');
    }
}
