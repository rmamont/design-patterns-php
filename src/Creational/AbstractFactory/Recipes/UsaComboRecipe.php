<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 06.02.2017
 * Time: 12:45
 */

namespace DesignPatterns\Creational\AbstractFactory\Recipes;


use DesignPatterns\Creational\AbstractFactory\Burgers\AbstractBurger;
use DesignPatterns\Creational\AbstractFactory\Burgers\Hamburger;
use DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato;
use DesignPatterns\Creational\AbstractFactory\Potatoes\FriesPotato;
use DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater;
use DesignPatterns\Creational\AbstractFactory\Waters\CocaColaWater;

/**
 * Class UsaComboRecipe
 * @package DesignPatterns\Creational\AbstractFactory\Recipes
 */
class UsaComboRecipe implements AbstractFactoryInterface
{
    /**
     * @return AbstractBurger
     */
    public function makeBurger()
    {
        return new Hamburger();
    }

    /**
     * @return AbstractPotato
     */
    public function makePotato()
    {
        return new FriesPotato();
    }

    /**
     * @return AbstractWater
     */
    public function makeWater()
    {
        return new CocaColaWater();
    }
}