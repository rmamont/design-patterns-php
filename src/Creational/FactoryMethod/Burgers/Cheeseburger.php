<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 02.02.2017
 * Time: 14:25
 */

namespace DesignPatterns\Creational\FactoryMethod\Burgers;


/**
 * Class Cheeseburger
 * @package DesignPatterns\Creational\FactoryMethod\BUrgers
 */
class Cheeseburger extends Burger
{
    /**
     * @var string
     */
    protected $meat = 'chicken';

    /**
     * @var string
     */
    protected $sauce = 'mayonnaise';

    /**
     * @var bool
     */
    protected $withCheese = true;
}