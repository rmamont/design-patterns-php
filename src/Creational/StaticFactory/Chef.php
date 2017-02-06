<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 06.02.2017
 * Time: 11:49
 */

namespace DesignPatterns\Creational\StaticFactory;


use DesignPatterns\Creational\StaticFactory\Burgers\Burger;
use DesignPatterns\Creational\StaticFactory\Burgers\Cheeseburger;
use DesignPatterns\Creational\StaticFactory\Burgers\Hamburger;

/**
 * Class Chef
 * @package DesignPatterns\Creational\StaticFactory
 */
class Chef
{
    /**
     * @param string $typeBurger
     * @return Burger
     */
    public static function makeBurger($typeBurger)
    {
        $typeBurger = strtolower($typeBurger);

        switch ($typeBurger) {
            case 'cheeseburger':
                return new Cheeseburger();
            case 'hamburger':
                return new Hamburger();
            default:
                throw new \InvalidArgumentException('Sorry. But we haven\'t this burger.');
        }
    }
}