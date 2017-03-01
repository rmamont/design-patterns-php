<?php
/**
 * User: nnrepin
 * Date: 01.03.2017
 * Time: 15:42
 */

namespace DesignPatterns\Behavioral\Command;


class Lamp
{
    public function turnOn()
    {
        return 'I\'m bright and cheerful light.';
    }

    public function turnOff()
    {
        return 'I am quiet and peaceful shadow.';
    }
}