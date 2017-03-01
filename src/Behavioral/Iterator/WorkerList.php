<?php
/**
 * User: nnrepin
 * Date: 01.03.2017
 * Time: 16:04
 */

namespace DesignPatterns\Behavioral\Iterator;


use Countable;
use Iterator;

class WorkerList implements Iterator, Countable
{
    /**
     * @var Worker[]
     */
    protected $workers = [];

    /**
     * @var int
     */
    protected $currentIndex = 0;

    /**
     * @param Worker $worker
     */
    public function addWorker($worker)
    {
        $this->workers[] = $worker;
    }

    /**
     * @return Worker
     */
    public function current()
    {
        return $this->workers[$this->currentIndex];
    }

    public function next()
    {
        $this->currentIndex++;
    }

    /**
     * @return int
     */
    public function key()
    {
        return $this->currentIndex;
    }

    /**
     * @return bool
     */
    public function valid()
    {
        return isset($this->workers[$this->currentIndex]);
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->workers);
    }
}