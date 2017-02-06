<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 30.01.2017
 * Time: 17:21
 */

namespace DesignPatterns\Creational\Singleton;


class Cashbox implements SingletonInterface
{
    /**
     * @var array
     */
    private $cash = [];

    use SingletonTrait;

    /**
     * Return sum for all cash operation on cashbox
     *
     * @return float
     */
    public function getAllCash()
    {
        return array_sum($this->cash);
    }

    /**
     * @param float $cash
     */
    public function setCash($cash)
    {
        $this->cash[uniqid()] = (float) $cash;
    }
}