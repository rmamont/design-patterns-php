<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 01.02.2017
 * Time: 17:49
 */

namespace DesignPatterns\Creational\Pool;


/**
 * Class Worker
 * @package DesignPatterns\Creational\Pool
 */
class Worker implements WorkerInterface
{
    /**
     * @var int
     */
    protected $workerNumber;

    /**
     * Worker constructor
     *
     * @param int $workerNumber
     * @param bool|false $performance
     */
    public function __construct($workerNumber, $performance = false)
    {
        if ($performance) {
            $this->getDelay();
        }

        $this->setNumberWorker($workerNumber);
    }

    /**
     * @return string
     */
    public function run()
    {
        return 'Hello. My number is ' . $this->getNumberWorker() . '!';
    }

    /**
     * @return int
     */
    private function getNumberWorker()
    {
        return $this->workerNumber;
    }

    /**
     * @param int $workerNumber
     * @return void
     */
    private function setNumberWorker($workerNumber)
    {
        $this->workerNumber = $workerNumber;
    }

    /**
     * Method for test performance Pool pattern
     *
     * @return void
     */
    private function getDelay()
    {
        sleep(3);
    }
}