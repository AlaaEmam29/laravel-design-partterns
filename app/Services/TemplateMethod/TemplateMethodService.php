<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 1/14/2020
 * Time: 5:14 PM
 */

namespace App\Services\TemplateMethod;


use App\Contracts\TemplateMethod\UserInfoInterface;

class TemplateMethodService
{
    /**
     * TemplateMethodService constructor.
     */
    public function __construct(UserInfoInterface $userInfo)
    {
       dump($userInfo->printFullName());
    }
}
