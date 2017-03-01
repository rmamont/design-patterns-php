<?php
/**
 * User: nnrepin
 * Date: 01.03.2017
 * Time: 17:03
 */

namespace DesignPatterns\Behavioral\Mediator;


class Database extends Colleague
{
    /**
     * @return string
     */
    public function getData()
    {
        return 'World!';
    }
}