<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 06.02.2017
 * Time: 12:35
 */

namespace DesignPatterns\Creational\AbstractFactory\Potatoes;


/**
 * Class RusticPotato
 * @package DesignPatterns\Creational\AbstractFactory\Potatoes
 */
class RusticPotato extends AbstractPotato
{
    /**
     * @var string
     */
    protected $shape = 'strips';
}