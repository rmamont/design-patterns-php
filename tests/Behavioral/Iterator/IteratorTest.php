<?php
/**
 * User: nnrepin
 * Date: 01.03.2017
 * Time: 16:10
 */

namespace DesignPatterns\Tests\Behavioral\Iterator;


use DesignPatterns\Behavioral\Iterator\Worker;
use DesignPatterns\Behavioral\Iterator\WorkerList;
use PHPUnit_Framework_TestCase;


class IteratorTest extends PHPUnit_Framework_TestCase
{
    public function testWorkerGetName()
    {
        $name = 'TestName';

        $worker = new Worker($name);
        $this->assertEquals($name, $worker->getName());
    }

    public function testCountList()
    {
        $ivanWorker = new Worker('Ivan');
        $petrWorker = new Worker('Petr');
        $andreyWorker = new Worker('Andrey');

        $workerList = new WorkerList();

        $workerList->addWorker($ivanWorker);
        $workerList->addWorker($petrWorker);
        $workerList->addWorker($andreyWorker);

        $this->assertCount(3, $workerList);
    }

    public function testWorkersListKey()
    {
        $workerList = new WorkerList();

        $this->assertEquals(0, $workerList->key());

        $workerList->next();
        $this->assertEquals(1, $workerList->key());

        $workerList->next();
        $this->assertEquals(2, $workerList->key());
    }

    public function testWorkersListValid()
    {
        $ivanWorker = new Worker('Ivan');
        $petrWorker = new Worker('Petr');
        $andreyWorker = new Worker('Andrey');

        $workerList = new WorkerList();

        $workerList->addWorker($ivanWorker);
        $workerList->addWorker($petrWorker);
        $workerList->addWorker($andreyWorker);

        $this->assertEquals(true, $workerList->valid());

        $workerList->next();
        $this->assertEquals(true, $workerList->valid());

        $workerList->next();
        $this->assertEquals(true, $workerList->valid());

        $workerList->next();
        $this->assertEquals(false, $workerList->valid());
    }

    public function testWorkersListResetKey()
    {
        $workerList = new WorkerList();

        $this->assertEquals(0, $workerList->key());

        $workerList->next();
        $this->assertEquals(1, $workerList->key());

        $workerList->next();
        $this->assertEquals(2, $workerList->key());

        $workerList->rewind();
        $this->assertEquals(0, $workerList->key());
    }

    public function testWorkersListCurrentWorker()
    {
        $ivanWorker = new Worker('Ivan');
        $petrWorker = new Worker('Petr');
        $andreyWorker = new Worker('Andrey');

        $workerList = new WorkerList();

        $workerList->addWorker($ivanWorker);
        $workerList->addWorker($petrWorker);
        $workerList->addWorker($andreyWorker);

        $this->assertSame($ivanWorker, $workerList->current());

        $workerList->next();
        $this->assertSame($petrWorker, $workerList->current());

        $workerList->next();
        $this->assertSame($andreyWorker, $workerList->current());

        $workerList->rewind();
        $this->assertSame($ivanWorker, $workerList->current());
    }
}
