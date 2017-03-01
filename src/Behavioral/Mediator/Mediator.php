<?php
/**
 * User: nnrepin
 * Date: 01.03.2017
 * Time: 16:50
 */

namespace DesignPatterns\Behavioral\Mediator;


/**
 * Class Mediator
 * @package DesignPatterns\Behavioral\Mediator
 */
class Mediator
{
    /**
     * @var Database
     */
    private $database;

    /**
     * @var Server
     */
    private $server;

    /**
     * @var Client
     */
    private $client;

    /**
     * @param Database $database
     * @param Server $server
     * @param Client $client
     */
    public function __construct($database, $server, $client)
    {
        $this->database = $database;
        $this->server = $server;
        $this->client = $client;

        $this->database->setMediator($this);
        $this->server->setMediator($this);
        $this->client->setMediator($this);
    }

    public function makeRequest()
    {
        $this->server->process();
    }

    /**
     * @return string
     */
    public function queryDb()
    {
        return $this->database->getData();
    }

    public function sendResponse($content)
    {
        $this->client->output($content);
    }
}