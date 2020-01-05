<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 12/25/2019
 * Time: 1:07 PM
 */

namespace App\Models\Builder;


use App\Contracts\Builder\HouseBuilder;

class CivilEngineer
{

    private $houseBuilder;

    public function __construct(HouseBuilder $house_builder)
    {
        $this->houseBuilder = $house_builder;
    }

    public function constructHouse()
    {
        $this->houseBuilder->buildRoof();
        $this->houseBuilder->buildStairs();
        $this->houseBuilder->buildWalls();
    }

    /**
     * @return \App\Models\Builder\House
     */
    public function getHouse(): House
    {
        return $this->houseBuilder->getHouse();
    }

}
