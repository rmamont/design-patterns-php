<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 06.02.2017
 * Time: 12:32
 */

namespace DesignPatterns\Creational\AbstractFactory\Burgers;


/**
 * Class Hamburger
 * @package DesignPatterns\Creational\AbstractFactory\Burgers
 */
class Hamburger extends AbstractBurger
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