<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 03.02.2017
 * Time: 14:58
 */

namespace DesignPatterns\Creational\Builder\Director;

use DesignPatterns\Creational\Builder\Builders\BurgerBuilderInterface;
use DesignPatterns\Creational\Builder\Burger\AbstractBurger;

/**
 * Interface DirectorInterface
 * @package DesignPatterns\Creational\Builder\Director
 */
interface DirectorInterface
{
    /**
     * @param BurgerBuilderInterface $builder
     * @return AbstractBurger
     */
    public function buildBurger(BurgerBuilderInterface $builder);
}