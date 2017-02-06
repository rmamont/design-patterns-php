<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 03.02.2017
 * Time: 12:05
 */

namespace DesignPatterns\Creational\Builder\Builders;

use DesignPatterns\Creational\Builder\Burger\AbstractBurger;

/**
 * Interface BurgerBuilderInterface
 * @package DesignPatterns\Creational\Builder\Builders
 */
interface BurgerBuilderInterface
{
    /**
     * @return void
     */
    public function createBurger();

    /**
     * @return AbstractBurger
     */
    public function getBurger();

    /**
     * @return void
     */
    public function addSauce();

    /**
     * @return void
     */
    public function addMeat();

    /**
     * @return void
     */
    public function addMuffin();
}