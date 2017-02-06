<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 06.02.2017
 * Time: 12:37
 */

namespace DesignPatterns\Creational\AbstractFactory\Recipes;


use DesignPatterns\Creational\AbstractFactory\Burgers\AbstractBurger;
use DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato;
use DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater;

interface AbstractFactoryInterface
{
    /**
     * @return AbstractBurger
     */
    public function makeBurger();

    /**
     * @return AbstractPotato
     */
    public function makePotato();

    /**
     * @return AbstractWater
     */
    public function makeWater();
}