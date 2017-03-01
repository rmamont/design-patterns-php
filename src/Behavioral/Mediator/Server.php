<?php
/**
 * User: nnrepin
 * Date: 01.03.2017
 * Time: 17:07
 */

namespace DesignPatterns\Behavioral\Mediator;


class Server extends Colleague
{
    public function process()
    {
        $data = $this->mediator->queryDb();

        $this->mediator->sendResponse(sprintf("Hello %s", $data));
    }
}