<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 01.02.2017
 * Time: 10:21
 */

namespace DesignPatterns\Creational\Multiton;

use DesignPatterns\Creational\Singleton\Cashbox;
use DesignPatterns\Creational\Singleton\SingletonInterface;

class ShopCashSystem implements MultitonInterface
{
    /**
     * @var SingletonInterface[]
     */
    private static $instances = [];

    /**
     * Return Singleton instance
     *
     * @param string $instanceName
     * @return SingletonInterface
     */
    public static function getInstance($instanceName)
    {
        if (!isset(self::$instances[$instanceName])) {
            self::$instances[$instanceName] = new Cashbox();
        }

        return self::$instances[$instanceName];
    }

    final public function __construct()
    {
    }

    final public function __clone()
    {
    }

    final public function __wakeup()
    {
    }
}