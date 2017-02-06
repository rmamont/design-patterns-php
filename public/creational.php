<?php
/**
 * Created by PhpStorm.
 * User: nnrepin
 * Date: 06.02.2017
 * Time: 12:11
 */


use \DesignPatterns\Creational as Creational;


/**
 * Creational\Singleton
 */
echo '>> Creational\Singleton', '<br><br>';

$singleton = Creational\Singleton\Cashbox::getInstance();

$singleton->setCash(2);
echo 'Added 2. Cash is ', $singleton->getAllCash(), '<br>';

$singleton->setCash(15.5);
echo 'Added 15.5. Cash is ', $singleton->getAllCash();
echo '<hr>';

/**
 * Creational\Multiton
 */
echo '>> Creational\Multiton', '<br><br>';

$multiton1 = Creational\Multiton\ShopCashSystem::getInstance('first');
$multiton2 = Creational\Multiton\ShopCashSystem::getInstance('second');

$multiton1->setCash(3);
echo 'Added 3 to Multiton#1. Multiton#1 is ', $multiton1->getAllCash(), '<br>';

$multiton2->setCash(7.5);
echo 'Added 7.5 to Multiton#2. Multiton#2 is ', $multiton2->getAllCash(), '<br>';

$multiton2->setCash(3.5);
echo 'Added 3.5 to Multiton#2. Multiton#2 is ', $multiton2->getAllCash();
echo '<hr>';

/**
 * Creational\Pool
 */
echo '>> Creational\Pool', '<br><br>';

$pool = new Creational\Pool\ShopStaff();

echo 'Count of occupied workers is ', $pool->getCountOccupiedWorkers(), '<br>';
echo 'Count of free workers is ', $pool->getCountFreeWorkers(), '<br>';

$poolWorker1 = $pool->getWorker();
echo 'Got Worker#1. Count of occupied workers is ', $pool->getCountOccupiedWorkers(), '<br>';
echo 'Got Worker#1. Count of free workers is ', $pool->getCountFreeWorkers(), '<br>';

$poolWorker2 = $pool->getWorker();
echo 'Got Worker#2. Count of occupied workers is ', $pool->getCountOccupiedWorkers(), '<br>';
echo 'Got Worker#2. Count of free workers is ', $pool->getCountFreeWorkers(), '<br>';

$pool->dispose($poolWorker2);
echo 'Disposed Worker#2. Count of occupied workers is ', $pool->getCountOccupiedWorkers(), '<br>';
echo 'Disposed Worker#2. Count of free workers is ', $pool->getCountFreeWorkers();
echo '<hr>';

/**
 * Factory Method
 */
echo '>> Creational\FactoryMethod', '<br><br>';

$factoryMethod = new Creational\FactoryMethod\Chef();

echo 'You want hamburger. ';

$factoryMethodHamburger = $factoryMethod->makeBurger('hamburger');

echo 'Got hamburger', ' with ', $factoryMethodHamburger->getMeat(), ' meat';
echo ' and ', $factoryMethodHamburger->getSauce(), ' sause';
echo ' and ', ($factoryMethodHamburger->getWithCheese() ? 'with cheese' : 'without cheese'), '.', '<br>';

echo 'You want cheeseburger. ';

$factoryMethodCheeseburger = $factoryMethod->makeBurger('cheeseburger');

echo 'Got cheeseburger', ' with ', $factoryMethodCheeseburger->getMeat(), ' meat';
echo ' and ', $factoryMethodCheeseburger->getSauce(), ' sause';
echo ' and ', ($factoryMethodCheeseburger->getWithCheese() ? 'with cheese' : 'without cheese'), '.', '<br>';

echo 'You want someburger. ';
try {
    $factoryMethodSomeburger = $factoryMethod->makeBurger('someburger');
} catch(Exception $e) {
    echo $e->getMessage();
}

echo '<hr>';

/**
 * Builder
 */
echo '>> Creational\Builder', '<br><br>';

$builderChef = new Creational\Builder\Director\Chef();

echo 'Got hamburger';

$builderHamburgerBuilder = new Creational\Builder\Builders\HamburgerBuilder();
$builderHamburgerObject = $builderChef->buildBurger($builderHamburgerBuilder);

$builderHamburgerParts = explode(', ', $builderHamburgerObject);

echo ' with ', $builderHamburgerParts[0], ' and ', $builderHamburgerParts[1], ' and ', $builderHamburgerParts[2], '.';

echo '<br>', 'Got cheeseburger';

$builderCheeseburgerBuilder = new Creational\Builder\Builders\CheeseburgerBuilder();
$builderCheeseburgerObject = $builderChef->buildBurger($builderCheeseburgerBuilder);

$builderCheeseburgerParts = explode(', ', $builderCheeseburgerObject);

echo ' with ', $builderCheeseburgerParts[0], ' and ', $builderCheeseburgerParts[1], ' and ', $builderCheeseburgerParts[2], '.', '<br>';

echo '<hr>';

/**
 * Simple Factory
 */
echo '>> Creational\Simple Factory', '<br><br>';

$simpleFactoryChef = new Creational\SimpleFactory\Chef();

$simpleFactoryHamburger = $simpleFactoryChef->makeBurger('hamburger');
echo 'Got hamburger';
echo ' with ', $simpleFactoryHamburger->getMeat();
echo ' and ', $simpleFactoryHamburger->getSauce();
echo ' and ', ($simpleFactoryHamburger->getWithCheese() ? 'with cheese' : 'without cheese'), '.', '<br>';

$simpleFactoryCheeseburger = $simpleFactoryChef->makeBurger('cheeseburger');
echo 'Got cheeseburger';
echo ' with ', $simpleFactoryCheeseburger->getMeat();
echo ' and ', $simpleFactoryCheeseburger->getSauce();
echo ' and ', ($simpleFactoryCheeseburger->getWithCheese() ? 'with cheese' : 'without cheese'), '.', '<br>';

echo 'You want someburger. ';
try {
    $simpleFactorySomeburger = $simpleFactoryChef->makeBurger('someburger');
} catch (Exception $e) {
    echo $e->getMessage();
}

echo '<hr>';

/**
 * Static Factory
 */
echo '>> Creational\Static Factory', '<br><br>';

echo 'Got hamburger';
$staticFactoryHamburger = Creational\StaticFactory\Chef::makeBurger('hamburger');
echo ' with ', $staticFactoryHamburger->getMeat();
echo ' and ', $staticFactoryHamburger->getSauce();
echo ' and ', ($staticFactoryHamburger->getWithCheese() ? 'with cheese' : 'without cheese'), '.', '<br>';

echo 'Got cheeseburger';
$staticFactoryCheeseburger = Creational\StaticFactory\Chef::makeBurger('cheeseburger');
echo ' with ', $staticFactoryCheeseburger->getMeat();
echo ' and ', $staticFactoryCheeseburger->getSauce();
echo ' and ', ($staticFactoryCheeseburger->getWithCheese() ? 'with cheese' : 'without cheese'), '.', '<br>';

echo 'You want someburger. ';
try {
    $staticFactorySomeburger = Creational\StaticFactory\Chef::makeBurger('someburger');
} catch (Exception $e) {
    echo $e->getMessage();
}

echo '<hr>';

/**
 * Abstract Factory
 */
echo '>> Creational\Abstract Factory', '<br><br>';

$abstractFactoryUSAComboRecipe = new Creational\AbstractFactory\Recipes\UsaComboRecipe();
$abstractFactoryChef = new Creational\AbstractFactory\Chef($abstractFactoryUSAComboRecipe);
$abstractFactoryCombo = $abstractFactoryChef->getCombo();

dumps($abstractFactoryCombo['Burger']);
dumps($abstractFactoryCombo['Potato']);
dumps($abstractFactoryCombo['Water']);

$abstractFactoryEuropeComboRecipe = new Creational\AbstractFactory\Recipes\EuropeComboRecipe();
$abstractFactoryChef = new Creational\AbstractFactory\Chef($abstractFactoryEuropeComboRecipe);
$abstractFactoryCombo = $abstractFactoryChef->getCombo();

dumps($abstractFactoryCombo['Burger']);
dumps($abstractFactoryCombo['Potato']);
dumps($abstractFactoryCombo['Water']);

echo '<hr>';

/**
 * Prototype
 */
echo '>> Creational\Prototype', '<br><br>';

$prototypeBoxPrototype = new Creational\Prototype\BoxPrototype(true);
$prototypeBoxPrototype->setTitle('Box#1');
echo $prototypeBoxPrototype->getTitle(), '<br>';

$prototypeBoxSecond = clone $prototypeBoxPrototype;
$prototypeBoxSecond->setTitle('Box#2');
echo $prototypeBoxSecond->getTitle();

echo '<hr>';
echo '<hr>';