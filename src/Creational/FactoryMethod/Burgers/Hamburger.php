<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 02.02.2017
 * Time: 14:27
 */

namespace DesignPatterns\Creational\FactoryMethod\Burgers;


/**
 * Class Hamburger
 * @package DesignPatterns\Creational\FactoryMethod\Burgers
 */
class Hamburger extends Burger
{
    /**
     * @var string
     */
    protected $meat = 'beef';

    /**
     * @var string
     */
    protected $sauce = 'ketchup';

    /**
     * @var bool
     */
    protected $withCheese = false;
}