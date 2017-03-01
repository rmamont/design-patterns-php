<?php
/**
 * User: nnrepin
 * Date: 01.03.2017
 * Time: 15:36
 */

namespace DesignPatterns\Behavioral\Command;

use Countable;
use RuntimeException;

/**
 * Class CommandRegistry
 * @package DesignPatterns\Behavioral\Command
 */
class CommandRegistry implements Countable
{
    /**
     * @var CommandInterface[]
     */
    private $registry = [];

    /**
     * @param CommandInterface $command
     * @param string $type
     */
    public function add($command, $type)
    {
        $this->registry[$type] = $command;
    }

    /**
     * @param string$type
     * @return CommandInterface
     * @throw RuntimeException
     */
    public function get($type)
    {
        if (!isset($this->registry[$type])) {
            throw new RuntimeException('Cannot find command ' . $type);
        }

        return $this->registry[$type];
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->registry);
    }
}