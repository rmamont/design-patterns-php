<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 02.02.2017
 * Time: 11:53
 */

namespace DesignPatterns\Creational\FactoryMethod\Burgers;


/**
 * Class Burger
 * @package DesignPatterns\Creational\FactoryMethod\BUrgers
 */
abstract class Burger
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

    /**
     * @return string
     */
    public function getMeat()
    {
        return $this->meat;
    }

    /**
     * @param string $meat
     * @return void
     */
    public function setMeat($meat)
    {
        $this->meat = $meat;
    }

    /**
     * @return string
     */
    public function getSauce()
    {
        return $this->sauce;
    }

    /**
     * @param string $sauce
     * @return void
     */
    public function setSauce($sauce)
    {
        $this->sauce = $sauce;
    }

    /**
     * @return bool
     */
    public function getWithCheese()
    {
        return $this->withCheese;
    }

    /**
     * @param bool $withCheese
     * @return void
     */
    public function setWithCheese($withCheese)
    {
        $this->withCheese = $withCheese;
    }
}