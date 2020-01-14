<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 1/14/2020
 * Time: 4:55 PM
 */

namespace App\Contracts\TemplateMethod;


interface UserInfoInterface
{
    /**
     * @return string
     */
   public function printFullName():string ;

    /**
     * @return string
     */
   public function getIdentifier():string ;

    /**
     * @return string
     */
   public function getFirstName($firstName):string ;

    /**
     * @return string
     */
   public function getSecondName($secondName):string ;

    /**
     * @return string
     */
   public function getThirdName($thirdName):string ;
}
