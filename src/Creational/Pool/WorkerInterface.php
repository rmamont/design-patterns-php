<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 01.02.2017
 * Time: 17:47
 */

namespace DesignPatterns\Creational\Pool;


/**
 * Interface WorkerInterface
 * @package DesignPatterns\Creational\Pool
 */
interface WorkerInterface
{
    /**
     * WorkerInterface constructor
     *
     * @param int $workerNumber
     * @param bool|false $performance
     */
    public function __construct($workerNumber, $performance = false);

    /**
     * @return string
     */
    public function run();
}