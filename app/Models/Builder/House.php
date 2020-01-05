<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 12/25/2019
 * Time: 12:52 PM
 */

namespace App\Models\Builder;


class House
{

    private $roof;
    private $stairs;
    private $walls;

    /**
     * @return mixed
     */
    public function getRoof()
    {
        return $this->roof;
    }

    /**
     * @param mixed $roof
     */
    public function setRoof($roof): void
    {
        $this->roof = $roof;
    }

    /**
     * @return mixed
     */
    public function getStairs()
    {
        return $this->stairs;
    }

    /**
     * @param mixed $stairs
     */
    public function setStairs($stairs): void
    {
        $this->stairs = $stairs;
    }

    /**
     * @return mixed
     */
    public function getWalls()
    {
        return $this->walls;
    }

    /**
     * @param mixed $walls
     */
    public function setWalls($walls): void
    {
        $this->walls = $walls;
    }




}
