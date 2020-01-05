<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 12/25/2019
 * Time: 1:11 PM
 */

namespace App\Services\Builder;


use App\Contracts\Builder\HouseBuilder;
use App\Models\Builder\CivilEngineer;

class BuilderService
{
    private $houseBuilder;

    public function __construct(HouseBuilder $houseBuilder)
    {
        $this->houseBuilder = $houseBuilder;
        $this->fire();
    }

    public function fire(){
        $civileEngineer = new CivilEngineer($this->houseBuilder);
        $civileEngineer->constructHouse();
        dd($civileEngineer->getHouse());
    }
}
