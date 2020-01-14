<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 1/14/2020
 * Time: 5:03 PM
 */

namespace App\Models\TemplateMethod;


class Employee extends UserInfo
{

    /**
     * @return string
     */
    public function getFirstName($firstName): string
    {
        return $firstName;
    }

    /**
     * @return string
     */
    public function getSecondName($secondName): string
    {
        return $secondName;
    }

    /**
     * @return string
     */
    function getThirdName($thirdName): string
    {
        return $thirdName;
    }

    /**
     * @return string
     */
    public function getIdentifier(): string
    {
        return 'Employee';
    }
}
