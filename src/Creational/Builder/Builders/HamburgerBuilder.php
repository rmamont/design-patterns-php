<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 03.02.2017
 * Time: 12:15
 */

namespace DesignPatterns\Creational\Builder\Builders;

use DesignPatterns\Creational\Builder\Burger\AbstractBurger;
use DesignPatterns\Creational\Builder\Burger\Burger;
use DesignPatterns\Creational\Builder\Burger\Parts\Meat;
use DesignPatterns\Creational\Builder\Burger\Parts\Sauce;
use DesignPatterns\Creational\Builder\Burger\Parts\Muffin;

/**
 * Class HamburgerBuilder
 * @package DesignPatterns\Creational\Builder\Builders
 */
class HamburgerBuilder implements BurgerBuilderInterface
{
    /**
     * @var AbstractBurger
     */
    private $hamburger;

    /**
     * @return void
     */
    public function createBurger()
    {
        $this->hamburger = new Burger();
    }

    /**
     * @return AbstractBurger
     */
    public function getBurger()
    {
        return $this->hamburger;
    }

    /**
     * @return void
     */
    public function addSauce()
    {
        $this->hamburger->setBurgerParts('sauce', new Sauce('ketchup'));
    }

    /**
     * @return void
     */
    public function addMeat()
    {
        $this->hamburger->setBurgerParts('meat', new Meat('beef'));
    }

    public function addMuffin()
    {
        $this->hamburger->setBurgerParts('muffin', new Muffin('muffin'));
    }
}