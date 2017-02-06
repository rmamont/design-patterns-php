<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 03.02.2017
 * Time: 17:54
 */

namespace DesignPatterns\Tests\Creational\SimpleFactory;

use DesignPatterns\Creational\SimpleFactory\Chef;
use InvalidArgumentException;
use PHPUnit_Framework_TestCase;

class SimpleFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testHamburgerInstanceOfBurger()
    {
        $chef = new Chef();

        $hamburger = $chef->makeBurger('hamburger');
        $someHamburger = $chef->makeBurger('hamburger');

        $this->assertInstanceOf('DesignPatterns\Creational\SimpleFactory\Burgers\Hamburger', $hamburger);
        $this->assertInstanceOf('DesignPatterns\Creational\SimpleFactory\Burgers\Hamburger', $someHamburger);
        $this->assertNotSame($hamburger, $someHamburger);
    }

    public function testCheeseburgerInstanceOfBurger()
    {
        $chef = new Chef();

        $cheeseburger = $chef->makeBurger('cheeseburger');
        $someCheeseburger = $chef->makeBurger('cheeseburger');

        $this->assertInstanceOf('DesignPatterns\Creational\SimpleFactory\Burgers\Cheeseburger', $cheeseburger);
        $this->assertInstanceOf('DesignPatterns\Creational\SimpleFactory\Burgers\Cheeseburger', $someCheeseburger);
        $this->assertNotSame($cheeseburger, $someCheeseburger);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
        $chef = new Chef();

        $chef->makeBurger('someburger');
    }

    public function testHamburgerComposition()
    {
        $chef = new Chef();

        $hamburger = $chef->makeBurger('hamburger');

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
        $chef = new Chef();

        $cheeseburger = $chef->makeBurger('cheeseburger');

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
