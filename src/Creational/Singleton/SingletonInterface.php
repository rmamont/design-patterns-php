<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 30.01.2017
 * Time: 17:15
 */

namespace DesignPatterns\Creational\Singleton;

/**
 * Interface SingletonInterface
 * @package DesignPatterns\Creational\Singleton
 */
interface SingletonInterface
{
    /**
     * @return SingletonInterface
     */
    public static function getInstance();

    public function __construct();

    public function __clone();

    public function __wakeup();
}