<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 12/24/2019
 * Time: 4:26 PM
 */

namespace App\Models\AbstractFactory;


use App\Contracts\AbstractFactory\Shape;

class RoundedSquare implements Shape
{

    public function draw()
    {
        dump('draw RoundedSquare');
    }
}
