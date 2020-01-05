<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 12/24/2019
 * Time: 4:58 PM
 */

namespace App\Services\AbstractFactory;


use App\Contracts\AbstractFactory\AbstractFactory;

class AbstractFactoryService
{
    private $factory;

    public function __construct(AbstractFactory $factory,$type)
    {
        $this->factory = $factory;
        $this->factory->getShape($type)->draw();
    }

}
