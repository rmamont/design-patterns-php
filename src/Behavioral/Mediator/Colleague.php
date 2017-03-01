<?php
/**
 * User: nnrepin
 * Date: 01.03.2017
 * Time: 17:04
 */

namespace DesignPatterns\Behavioral\Mediator;


abstract class Colleague
{
    /**
     * @var Mediator
     */
    protected $mediator;

    /**
     * @param Mediator $mediator
     */
    public function setMediator($mediator)
    {
        $this->mediator = $mediator;
    }
}