<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 06.02.2017
 * Time: 12:42
 */

namespace DesignPatterns\Creational\AbstractFactory\Recipes;


use DesignPatterns\Creational\AbstractFactory\Burgers\AbstractBurger;
use DesignPatterns\Creational\AbstractFactory\Burgers\Cheeseburger;
use DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato;
use DesignPatterns\Creational\AbstractFactory\Potatoes\RusticPotato;
use DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater;
use DesignPatterns\Creational\AbstractFactory\Waters\FantaWater;

/**
 * Class EuropeComboRecipe
 * @package DesignPatterns\Creational\AbstractFactory\Recipes
 */
class EuropeComboRecipe implements AbstractFactoryInterface
{
    /**
     * @return AbstractBurger
     */
    public function makeBurger()
    {
        return new Cheeseburger();
    }

    /**
     * @return AbstractPotato
     */
    public function makePotato()
    {
        return new RusticPotato();
    }

    /**
     * @return AbstractWater
     */
    public function makeWater()
    {
        return new FantaWater();
    }
}