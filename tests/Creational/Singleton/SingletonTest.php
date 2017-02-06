<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 30.01.2017
 * Time: 17:26
 */

namespace DesignPatterns\Tests\Creational\Singleton;

use DesignPatterns\Creational\Singleton\Cashbox;
use PHPUnit_Framework_TestCase;

class SingletonTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Cashbox
     */
    protected $shopCashbox;

    protected function setUp()
    {
        $this->shopCashbox = Cashbox::getInstance();
    }

    public function testInstanceOfSingleton()
    {
        $this->assertInstanceOf('DesignPatterns\Creational\Singleton\Cashbox', $this->shopCashbox);
    }

    public function testUniquePropertyFirstPurchase()
    {
        $sumPurchases = 2;
        $this->shopCashbox->setCash($sumPurchases);

        $this->assertEquals($sumPurchases, $this->shopCashbox->getAllCash());

        return $sumPurchases;
    }

    /**
     * @depends testUniquePropertyFirstPurchase
     * @param int $sumPurchases
     * @return int
     */
    public function testUniquePropertySecondPurchase($sumPurchases)
    {
        $secondPurchase = 4;
        $this->shopCashbox->setCash($secondPurchase);
        $sumPurchases += $secondPurchase;

        $this->assertEquals($sumPurchases, $this->shopCashbox->getAllCash());

        return $sumPurchases;
    }

    /**
     * @depends testUniquePropertySecondPurchase
     * @param int $sumPurchases
     */
    public function testUniquePropertySellerHaveMistake($sumPurchases)
    {
        $sellerMistake = -3;
        $this->shopCashbox->setCash($sellerMistake);
        $sumPurchases += $sellerMistake;

        $this->assertEquals($sumPurchases, $this->shopCashbox->getAllCash());
    }

    public function testUniqueness()
    {
        $firstCall = Cashbox::getInstance();
        $secondCall = Cashbox::getInstance();

        $this->assertInstanceOf('DesignPatterns\Creational\Singleton\Cashbox', $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}