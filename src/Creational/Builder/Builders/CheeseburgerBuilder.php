<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 03.02.2017
 * Time: 12:08
 */

namespace DesignPatterns\Creational\Builder\Builders;

use DesignPatterns\Creational\Builder\Burger\AbstractBurger;
use DesignPatterns\Creational\Builder\Burger\Burger;
use DesignPatterns\Creational\Builder\Burger\Parts\Meat;
use DesignPatterns\Creational\Builder\Burger\Parts\Sauce;
use DesignPatterns\Creational\Builder\Burger\Parts\Muffin;

/**
 * Class CheeseburgerBuilder
 * @package DesignPatterns\Creational\Builder\Builders
 */
class CheeseburgerBuilder implements BurgerBuilderInterface
{
    /**
     * @var AbstractBurger
     */
    private $cheeseburger;

    /**
     * @return void
     */
    public function createBurger()
    {
        $this->cheeseburger = new Burger();
    }

    /**
     * @return AbstractBurger
     */
    public function getBurger()
    {
        return $this->cheeseburger;
    }

    /**
     * @return void
     */
    public function addSauce()
    {
        $this->cheeseburger->setBurgerParts('sauce', new Sauce('mayonnaise'));
    }

    /**
     * @return void
     */
    public function addMeat()
    {
        $this->cheeseburger->setBurgerParts('meat', new Meat('chicken'));
    }

    /**
     * @return void
     */
    public function addMuffin()
    {
        $this->cheeseburger->setBurgerParts('muffin', new Muffin('muffin'));
    }
}