<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 03.02.2017
 * Time: 12:25
 */

namespace DesignPatterns\Creational\Builder\Burger;

use DesignPatterns\Creational\Builder\Burger\Parts\AbstractPart;

/**
 * Class AbstractBurger
 * @package DesignPatterns\Creational\Builder\Burger
 */
abstract class AbstractBurger
{
    /**
     * @var AbstractPart[]
     */
    private $burgerParts = [];

    /**
     * @param string $partName
     * @param AbstractPart $partObject
     */
    public function setBurgerParts($partName, $partObject)
    {
        $this->burgerParts[$partName] = $partObject;
    }

    public function __toString()
    {
        return implode(', ', $this->burgerParts);
    }
}