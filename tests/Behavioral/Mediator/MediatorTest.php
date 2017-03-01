<?php
/**
 * User: nnrepin
 * Date: 01.03.2017
 * Time: 17:10
 */

namespace DesignPatterns\Tests\Behavioral\Mediator;


use DesignPatterns\Behavioral\Mediator\Client;
use DesignPatterns\Behavioral\Mediator\Database;
use DesignPatterns\Behavioral\Mediator\Server;
use DesignPatterns\Behavioral\Mediator\Mediator;
use PHPUnit_Framework_TestCase;


class MediatorTest extends PHPUnit_Framework_TestCase
{
    public function testOutputHelloWorld()
    {
        $client = new Client();

        new Mediator(new Database(), new Server(), $client);

        $this->expectOutputString('Hello World!');
        $client->request();
    }
}
