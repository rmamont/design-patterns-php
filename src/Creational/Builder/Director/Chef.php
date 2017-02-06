<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 03.02.2017
 * Time: 14:53
 */

namespace DesignPatterns\Creational\Builder\Director;

use DesignPatterns\Creational\Builder\Builders\BurgerBuilderInterface;
use DesignPatterns\Creational\Builder\Burger\AbstractBurger;


/**
 * Class Chef
 * @package DesignPatterns\Creational\Builder\Director
 */
class Chef implements DirectorInterface
{
    /**
     * @param BurgerBuilderInterface $builder
     * @return AbstractBurger
     */
    public function buildBurger(BurgerBuilderInterface $builder)
    {
        $builder->createBurger();

        $builder->addMeat();
        $builder->addSauce();
        $builder->addMuffin();

        return $builder->getBurger();
    }
}