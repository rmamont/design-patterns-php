<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 03.02.2017
 * Time: 17:50
 */

namespace DesignPatterns\Creational\SimpleFactory;

use DesignPatterns\Creational\SimpleFactory\Burgers\Burger;
use DesignPatterns\Creational\SimpleFactory\Burgers\Cheeseburger;
use DesignPatterns\Creational\SimpleFactory\Burgers\Hamburger;

class Chef
{
    /**
     * @param string $typeBurger
     * @return BUrger
     */
    public function makeBurger($typeBurger)
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