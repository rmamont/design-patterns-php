<?php
/**
 * User: nnrepin
 * Date: 28.02.2017
 * Time: 17:13
 */

namespace DesignPatterns\Behavioral\ChainOfResponsibility;


/**
 * Class Department
 * @package DesignPatterns\Behavioral\ChainOfResponsibility
 */
class Department extends AbstractDepartment
{
    /**
     * @param string $nameDepartment
     * @param int $importance
     * @param AbstractDepartment|null $parent
     */
    public function __construct($nameDepartment, $importance, $parent = null)
    {
        $this->name = $nameDepartment;
        $this->importance = $importance;
        $this->parent = $parent;
    }

    /**
     * @param Contract $contract
     * @return Contract
     */
    public function getSign($contract)
    {
        if ($this->getImportance() < $contract->getImportance() &&
            $this->parent
        ) {
            return $this->parent->getSign($contract);
        }

        return $this->setSign($contract);
    }
}