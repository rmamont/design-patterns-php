<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 02.02.2017
 * Time: 14:29
 */

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Burgers\Burger;
use DesignPatterns\Creational\FactoryMethod\Burgers\Hamburger;
use DesignPatterns\Creational\FactoryMethod\Burgers\Cheeseburger;

/**
 * Class Chef
 * @package DesignPatterns\Creational\FactoryMethod
 */
class Chef implements FactoryMethodInterface
{
    /**
     * @param string $burgerType
     * @return Burger
     */
    public function makeBurger($burgerType)
    {
        $burgerType = strtolower($burgerType);

        switch ($burgerType) {
            case 'cheeseburger':
                return new Cheeseburger();
            case 'hamburger':
                return new Hamburger();
            default:
                throw new \InvalidArgumentException('Sorry. But we haven\'t this burger.');
        }
    }
}