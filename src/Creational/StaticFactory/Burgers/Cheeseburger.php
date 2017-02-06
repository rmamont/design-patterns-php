<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 06.02.2017
 * Time: 11:21
 */

namespace DesignPatterns\Creational\StaticFactory\Burgers;


/**
 * Class Cheeseburger
 * @package DesignPatterns\Creational\StaticFactory\Burgers
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