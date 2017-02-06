<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 06.02.2017
 * Time: 12:48
 */

namespace DesignPatterns\Creational\AbstractFactory;


use DesignPatterns\Creational\AbstractFactory\Burgers\AbstractBurger;
use DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato;
use DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater;
use DesignPatterns\Creational\AbstractFactory\Recipes\AbstractFactoryInterface;

/**
 * Class Chef
 * @package DesignPatterns\Creational\AbstractFactory
 */
class Chef
{
    /**
     * @var AbstractFactoryInterface
     */
    protected $comboRecipe;

    /**
     * Chef constructor
     *
     * @param AbstractFactoryInterface $recipe
     */
    public function __construct(AbstractFactoryInterface $recipe)
    {
        $this->comboRecipe = $recipe;
    }

    /**
     * @return AbstractBurger
     */
    public function getBurger()
    {
        return $this->comboRecipe->makeBurger();
    }

    /**
     * @return AbstractPotato
     */
    public function getPotato()
    {
        return $this->comboRecipe->makePotato();
    }

    /**
     * @return AbstractWater
     */
    public function getWater()
    {
        return $this->comboRecipe->makeWater();
    }

    /**
     * @return array
     */
    public function getCombo()
    {
        return [
            'Burger' => $this->getBurger(),
            'Potato' => $this->getPotato(),
            'Water' => $this->getWater(),
        ];
    }
}