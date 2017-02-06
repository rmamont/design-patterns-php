<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 01.02.2017
 * Time: 10:17
 */

namespace DesignPatterns\Creational\Multiton;

use DesignPatterns\Creational\Singleton\SingletonInterface;

/**
 * Interface MultitonInterface
 * @package DesignPatterns\Creational\Multiton
 */
interface MultitonInterface
{
    /**
     * @param string $instanceName
     * @return SingletonInterface
     */
    public static function getInstance($instanceName);

    public function __construct();

    public function __clone();

    public function __wakeup();
}