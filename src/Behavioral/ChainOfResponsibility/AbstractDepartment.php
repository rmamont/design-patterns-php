<?php
/**
 * User: nnrepin
 * Date: 28.02.2017
 * Time: 17:03
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibility;


/**
 * Class AbstractDepartment
 * @package DesignPatterns\Behavioral\ChainOfResponsibility
 */
abstract class AbstractDepartment
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $importance;

    /**
     * @var AbstractDepartment
     */
    protected $parent;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getImportance()
    {
        return $this->importance;
    }

    /**
     * @return AbstractDepartment
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param Contract $contract
     * @return Contract
     */
    abstract public function getSign($contract);

    /**
     * @param Contract $contract
     * @return Contract
     */
    protected function setSign(Contract $contract)
    {
        $contract->setSign($this->getName());

        return $contract;
    }
}