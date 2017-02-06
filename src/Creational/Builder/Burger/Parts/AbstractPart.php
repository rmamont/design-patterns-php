<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 03.02.2017
 * Time: 12:21
 */

namespace DesignPatterns\Creational\Builder\Burger\Parts;


/**
 * Class AbstractPart
 * @package DesignPatterns\Creational\Builder\Burger\Parts
 */
abstract class AbstractPart
{
    /**
     * @var string
     */
    protected $title;

    /**
     * AbstractPart constructor
     *
     * @param string $title
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function __toString()
    {
        return $this->title;
    }
}