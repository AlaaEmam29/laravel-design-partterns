<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 1/14/2020
 * Time: 4:59 PM
 */

namespace App\Models\TemplateMethod;


use App\Contracts\TemplateMethod\UserInfoInterface;

abstract class UserInfo implements UserInfoInterface
{

    /**
     * @var
     */
    private $firstName;

    /**
     * @var
     */
    private $secondName;

    /**
     * @var
     */
    private $thirdName;

    /**
     * UserInfo constructor.
     */
    public function __construct($firstName, $secondName, $thirdName)
    {
        $this->firstName = $firstName;
        $this->secondName = $secondName;
        $this->thirdName = $thirdName;
    }

    /**
     * @return string
     */
    public function printFullName(): string
    {
        $fullname = $this->getIdentifier() . " " . $this->getFirstName($this->firstName) . " " . $this->getSecondName($this->secondName) . " " . $this->getThirdName($this->thirdName);
        return $fullname;
    }


    /**
     * @return string
     */
    abstract public function getIdentifier(): string;

    /**
     * @return string
     */
    abstract public function getFirstName($firstName): string;

    /**
     * @return string
     */
    abstract public function getSecondName($secondName): string;

    /**
     * @return string
     */
    abstract function getThirdName($thirdName): string;
}
