<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 06.02.2017
 * Time: 12:54
 */

namespace DesignPatterns\Tests\Creational\AbstractFactory;


use DesignPatterns\Creational\AbstractFactory\Chef;
use DesignPatterns\Creational\AbstractFactory\Recipes\UsaComboRecipe;
use DesignPatterns\Creational\AbstractFactory\Recipes\EuropeComboRecipe;
use PHPUnit_Framework_TestCase;

class AbstractFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testUsaComboRecipeInstanceOfAbstractFactory()
    {
        $usaComboRecipe = new UsaComboRecipe();

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Recipes\UsaComboRecipe', $usaComboRecipe);
    }

    public function testEuropeComboRecipeInstanceOfAbstractFactory()
    {
        $europeComboRecipe = new EuropeComboRecipe();

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Recipes\EuropeComboRecipe', $europeComboRecipe);
    }

    public function testBurgerOnUSAToday()
    {
        $usaComboRecipe = new UsaComboRecipe();
        $chef = new Chef($usaComboRecipe);

        $usaBurger = $chef->getBurger();

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Burgers\AbstractBurger', $usaBurger);
        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Burgers\Hamburger', $usaBurger);
    }

    public function testPotatoOnUSAToday()
    {
        $usaComboRecipe = new UsaComboRecipe();
        $chef = new Chef($usaComboRecipe);

        $usaPotato = $chef->getPotato();

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato', $usaPotato);
        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Potatoes\FriesPotato', $usaPotato);
    }

    public function testWaterOnUSAToday()
    {
        $usaComboRecipe = new UsaComboRecipe();
        $chef = new Chef($usaComboRecipe);

        $usaWater = $chef->getWater();

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater', $usaWater);
        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Waters\CocaColaWater', $usaWater);
    }

    public function testComboOnUSAToday()
    {
        $usaComboRecipe = new UsaComboRecipe();
        $chef = new Chef($usaComboRecipe);

        $usaCombo = $chef->getCombo();

        $this->assertCount(3, $usaCombo);

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Burgers\AbstractBurger', $usaCombo['Burger']);
        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Burgers\Hamburger', $usaCombo['Burger']);

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato', $usaCombo['Potato']);
        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Potatoes\FriesPotato', $usaCombo['Potato']);

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater', $usaCombo['Water']);
        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Waters\CocaColaWater', $usaCombo['Water']);
    }

    public function testBurgerOnEuropeToday()
    {
        $europeComboRecipe = new EuropeComboRecipe();
        $chef = new Chef($europeComboRecipe);

        $europeBurger = $chef->getBurger();

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Burgers\AbstractBurger', $europeBurger);
        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Burgers\Cheeseburger', $europeBurger);
    }

    public function testPotatoOnEuropeToday()
    {
        $europeComboRecipe = new EuropeComboRecipe();
        $chef = new Chef($europeComboRecipe);

        $europePotato = $chef->getPotato();

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato', $europePotato);
        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Potatoes\RusticPotato', $europePotato);
    }

    public function testWaterOnEuropeToday()
    {
        $europeComboRecipe = new EuropeComboRecipe();
        $chef = new Chef($europeComboRecipe);

        $europeWater = $chef->getWater();

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater', $europeWater);
        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Waters\FantaWater', $europeWater);
    }

    public function testComboOnEuropeToday()
    {
        $europeComboRecipe = new EuropeComboRecipe();
        $chef = new Chef($europeComboRecipe);

        $europeCombo = $chef->getCombo();

        $this->assertCount(3, $europeCombo);

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Burgers\AbstractBurger', $europeCombo['Burger']);
        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Burgers\Cheeseburger', $europeCombo['Burger']);

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Potatoes\AbstractPotato', $europeCombo['Potato']);
        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Potatoes\RusticPotato', $europeCombo['Potato']);

        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Waters\AbstractWater', $europeCombo['Water']);
        $this->assertInstanceOf('DesignPatterns\Creational\AbstractFactory\Waters\FantaWater', $europeCombo['Water']);
    }
}
