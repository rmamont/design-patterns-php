<?php
/**
 * User: nnrepin
 * Date: 01.03.2017
 * Time: 17:42
 */

namespace DesignPatterns\Behavioral\Memento;


/**
 * Class Game
 * @package DesignPatterns\Behavioral\Memento
 */
class Game
{
    /**
     * @var Save
     */
    protected $save;

    /**
     * @param Player $player
     */
    public function makeSave($player)
    {
        $this->save = $player->getMemento();
    }

    /**
     * @param Player $player
     */
    public function makeLoad($player)
    {
        $player->setMemento($this->save);
    }
}