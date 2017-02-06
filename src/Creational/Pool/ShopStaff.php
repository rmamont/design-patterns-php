<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 01.02.2017
 * Time: 17:56
 */

namespace DesignPatterns\Creational\Pool;

use Countable;

/**
 * Class ShopStaff
 * @package DesignPatterns\Creational\Pool
 */
class ShopStaff implements Countable
{
    /**
     * @var Worker[]
     */
    private $occupiedWorkers = [];

    /**
     * @var Worker[]
     */
    private $freeWorkers = [];

    /**
     * @param bool $delay
     * @return Worker
     */
    public function getWorker($delay = null)
    {
        $workerNumber = $this->count() + 1;

        if (!$this->getCountFreeWorkers()) {
            $worker = new Worker($workerNumber, $delay);
        } else {
            $worker = array_pop($this->freeWorkers);
        }

        $this->occupiedWorkers[$this->getHash($worker)] = $worker;

        return $worker;
    }

    /**
     * @param Worker $worker
     * @return void
     */
    public function dispose(Worker $worker)
    {
        $key = $this->getHash($worker);

        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    /**
     * @return int
     */
    public function count()
    {
        return $this->getCountOccupiedWorkers() + $this->getCountFreeWorkers();
    }

    /**
     * @return int
     */
    public function getCountFreeWorkers()
    {
        return count($this->freeWorkers);
    }

    /**
     * @return int
     */
    public function getCountOccupiedWorkers()
    {
        return count($this->occupiedWorkers);
    }

    /**
     * @param Worker $worker
     * @return string
     */
    private function getHash(Worker $worker)
    {
        return spl_object_hash($worker);
    }
}