<?php
/**
 * User: nnrepin
 * Date: 01.03.2017
 * Time: 16:02
 */

namespace DesignPatterns\Behavioral\Iterator;


/**
 * Class Worker
 * @package DesignPatterns\Behavioral\Iterator
 */
class Worker
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}