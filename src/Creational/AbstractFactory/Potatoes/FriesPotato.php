<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 06.02.2017
 * Time: 12:34
 */

namespace DesignPatterns\Creational\AbstractFactory\Potatoes;


/**
 * Class FriesPotato
 * @package DesignPatterns\Creational\AbstractFactory\Potatoes
 */
class FriesPotato extends AbstractPotato
{
    /**
     * @var string
     */
    protected $shape = 'strips';
}