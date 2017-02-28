<?php
/**
 * User: nnrepin
 * Date: 28.02.2017
 * Time: 17:09
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibility;


/**
 * Class Contract
 * @package DesignPatterns\Behavioral\ChainOfResponsibility
 */
class Contract
{
    /**
     * @var int
     */
    protected $importance;

    /**
     * @var string
     */
    protected $sign;

    /**
     * @param int $importance
     */
    public function __construct($importance)
    {
        $this->importance = $importance;
    }

    /**
     * @return int
     */
    public function getImportance()
    {
        return $this->importance;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setSign($name)
    {
        $this->sign = $name;
    }

    /**
     * @return string
     */
    public function getSign()
    {
        return $this->sign;
    }
}