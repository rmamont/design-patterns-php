<?php
/**
 * User: nnrepin
 * Date: 01.03.2017
 * Time: 17:05
 */

namespace DesignPatterns\Behavioral\Mediator;


class Client extends Colleague
{
    public function request()
    {
        $this->mediator->makeRequest();
    }

    /**
     * @param string $content
     */
    public function output($content)
    {
        echo $content;
    }
}