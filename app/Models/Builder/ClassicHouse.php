<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 12/25/2019
 * Time: 1:01 PM
 */

namespace App\Models\Builder;


use App\Contracts\Builder\HouseBuilder;

class ClassicHouse implements HouseBuilder
{
    private $house;

    public function __construct()
    {
        $this->house = new House();
    }

    public function buildRoof(): void
    {
        $this->house->setRoof('Classic Roof');
    }

    public function buildStairs(): void
    {
        $this->house->setStairs('Classic Stairs');
    }

    public function buildWalls(): void
    {
        $this->house->setWalls('Classic Walls');
    }

    public function getHouse(): House
    {
        return $this->house;
    }
}
