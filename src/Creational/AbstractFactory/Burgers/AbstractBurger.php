<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 06.02.2017
 * Time: 12:30
 */

namespace DesignPatterns\Creational\AbstractFactory\Burgers;


/**
 * Class AbstractBurger
 * @package DesignPatterns\Creational\AbstractFactory\Burgers
 */
abstract class AbstractBurger
{
    /**
     * @var string
     */
    protected $meat;

    /**
     * @var string
     */
    protected $sauce;

    /**
     * @var bool
     */
    protected $withCheese;
}