<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 06.02.2017
 * Time: 11:52
 */

namespace DesignPatterns\Tests\Creational\StaticFactory;

use DesignPatterns\Creational\StaticFactory\Chef;
use InvalidArgumentException;
use PHPUnit_Framework_TestCase;

class StaticFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testHamburgerInstanceOfBurger()
    {
        $hamburger = Chef::makeBurger('hamburger');
        $someHamburger = Chef::makeBurger('hamburger');

        $this->assertInstanceOf('DesignPatterns\Creational\StaticFactory\Burgers\Burger', $hamburger);
        $this->assertInstanceOf('DesignPatterns\Creational\StaticFactory\Burgers\Burger', $someHamburger);
        $this->assertNotSame($hamburger, $someHamburger);
    }

    public function testCheeseburgerInstanceOfBurger()
    {
        $cheeseburger = Chef::makeBurger('cheeseburger');
        $someCheeseburger = Chef::makeBurger('cheeseburger');

        $this->assertInstanceOf('DesignPatterns\Creational\StaticFactory\Burgers\Burger', $cheeseburger);
        $this->assertInstanceOf('DesignPatterns\Creational\StaticFactory\Burgers\Burger', $someCheeseburger);
        $this->assertNotSame($cheeseburger, $someCheeseburger);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
        Chef::makeBurger('someburger');
    }

    public function testHamburgerComposition()
    {
        $hamburger = Chef::makeBurger('hamburger');

        $hamburgerMeat = $hamburger->getMeat();
        $hamburgerSauce = $hamburger->getSauce();
        $hamburgerWithCheese = $hamburger->getWithCheese();

        $this->assertEquals('beef', $hamburgerMeat);
        $this->assertNotEquals('chicken', $hamburgerMeat);

        $this->assertEquals('ketchup', $hamburgerSauce);
        $this->assertNotEquals('mayonnaise', $hamburgerSauce);

        $this->assertEquals(false, $hamburgerWithCheese);
        $this->assertNotEquals(true, $hamburgerWithCheese);
    }

    public function testCheeseburgerComposition()
    {
        $cheeseburger = Chef::makeBurger('cheeseburger');

        $cheeseburgerMeat = $cheeseburger->getMeat();
        $cheeseburgerSauce = $cheeseburger->getSauce();
        $cheeseburgerWithCheese = $cheeseburger->getWithCheese();

        $this->assertEquals('chicken', $cheeseburgerMeat);
        $this->assertNotEquals('beef', $cheeseburgerMeat);

        $this->assertEquals('mayonnaise', $cheeseburgerSauce);
        $this->assertNotEquals('ketchup', $cheeseburgerSauce);

        $this->assertEquals(true, $cheeseburgerWithCheese);
        $this->assertNotEquals(false, $cheeseburgerWithCheese);
    }
}
