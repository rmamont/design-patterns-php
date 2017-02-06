<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 03.02.2017
 * Time: 17:47
 */

namespace DesignPatterns\Creational\SimpleFactory\Burgers;


/**
 * Class Cheeseburger
 * @package DesignPatterns\Creational\SimpleFactory\Burgers
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