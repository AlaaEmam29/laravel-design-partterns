<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 12/25/2019
 * Time: 1:02 PM
 */

namespace App\Models\Builder;


use App\Contracts\Builder\HouseBuilder;

class ModernHouse implements HouseBuilder
{
    private $house;

    public function __construct()
    {
        $this->house = new House();
    }

    public function buildRoof(): void
    {
        $this->house->setRoof('Modern Roof');
    }

    public function buildStairs(): void
    {
        $this->house->setStairs('Modern Stairs');
    }

    public function buildWalls(): void
    {
        $this->house->setWalls('Modern Walls');
    }

    public function getHouse(): House
    {
        return $this->house;
    }
}
