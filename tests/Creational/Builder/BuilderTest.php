<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 03.02.2017
 * Time: 15:01
 */

namespace DesignPatterns\Tests\Creational\Builder;

use DesignPatterns\Creational\Builder\Builders\HamburgerBuilder;
use DesignPatterns\Creational\Builder\Builders\CheeseburgerBuilder;
use DesignPatterns\Creational\Builder\Director\Chef;
use PHPUnit_Framework_TestCase;

class BuilderTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Chef
     */
    private $chef;

    protected function setUp()
    {
        $this->chef = new Chef();
    }

    public function testCanCreateHamburger()
    {
        $builder = new HamburgerBuilder();

        $hamburger = $this->chef->buildBurger($builder);

        $this->assertInstanceOf('DesignPatterns\Creational\Builder\Burger\Burger', $hamburger);
    }

    public function testCanCreateCheeseburger()
    {
        $builder = new CheeseburgerBuilder();

        $cheeseburger = $this->chef->buildBurger($builder);

        $this->assertInstanceOf('DesignPatterns\Creational\Builder\Burger\Burger', $cheeseburger);
    }
}
