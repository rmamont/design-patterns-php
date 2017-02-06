<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 02.02.2017
 * Time: 14:30
 */

namespace DesignPatterns\Creational\FactoryMethod;

use DesignPatterns\Creational\FactoryMethod\Burgers\Burger;

/**
 * Interface FactoryMethodInterface
 * @package DesignPatterns\Creational\FactoryMethod
 */
interface FactoryMethodInterface
{
    /**
     * @param string $burgerType
     * @return Burger
     */
    public function makeBurger($burgerType);
}