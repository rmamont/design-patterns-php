<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 01.02.2017
 * Time: 16:59
 */

namespace DesignPatterns\Creational\Prototype;

/**
 * Class BoxPrototype
 * @package DesignPatterns\Creational\Prototype
 */
class BoxPrototype
{
    /**
     * @var string
     */
    protected $title;

    /**
     * BoxPrototype constructor
     *
     * If TRUE === delay, init object created 1 sec
     * 
     * @param bool|false $delay
     */
    public function __construct($delay = false)
    {
        if (true === $delay) {
            sleep(1);
        }
    }

    public function __clone()
    {
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}