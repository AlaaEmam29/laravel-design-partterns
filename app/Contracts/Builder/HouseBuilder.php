<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 12/25/2019
 * Time: 12:55 PM
 */

namespace App\Contracts\Builder;


use App\Models\Builder\House;

interface HouseBuilder
{

    public function buildRoof(): void;

    public function buildStairs(): void;

    public function buildWalls(): void;

    public function getHouse(): House;

}
