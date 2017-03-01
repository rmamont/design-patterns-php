<?php
/**
 * User: nnrepin
 * Date: 01.03.2017
 * Time: 17:51
 */

namespace DesignPatterns\Behavioral\Memento;


/**
 * Class Save
 * @package DesignPatterns\Behavioral\Memento
 */
class Save
{
    /**
     * @var int
     */
    protected $hp;

    /**
     * @param int $hp
     */
    public function __construct($hp)
    {
        $this->hp = $hp;
    }

    /**
     * @return int
     */
    public function getState()
    {
        return $this->hp;
    }
}