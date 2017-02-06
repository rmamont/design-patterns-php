<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 30.01.2017
 * Time: 17:18
 */

namespace DesignPatterns\Creational\Singleton;


trait SingletonTrait
{
    /**
     * @var SingletonInterface
     */
    protected static $instance;

    final public static function getInstance()
    {
        if (!static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
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