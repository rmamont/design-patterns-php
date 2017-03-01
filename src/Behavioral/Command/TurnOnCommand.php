<?php
/**
 * User: nnrepin
 * Date: 01.03.2017
 * Time: 15:46
 */

namespace DesignPatterns\Behavioral\Command;


class TurnOnCommand implements CommandInterface
{
    /**
     * @var Lamp
     */
    protected $lamp;

    /**
     * @param Lamp $lamp
     */
    public function __construct($lamp)
    {
        $this->lamp = $lamp;
    }

    public function execute()
    {
        return $this->lamp->turnOn();
    }
}