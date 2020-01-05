<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 12/24/2019
 * Time: 4:33 PM
 */

namespace App\Models\AbstractFactory;


use App\Contracts\AbstractFactory\AbstractFactory;
use App\Contracts\AbstractFactory\Shape;

class RoundedShapeFactory implements AbstractFactory
{

    public function getShape(String $shape): Shape
    {
        if ($shape == 'RECTANGLE') {
            return new RoundedRectangle();
        } elseif ($shape == 'SQUARE') {
            return new RoundedSquare();
        }

        return null;
    }
}
