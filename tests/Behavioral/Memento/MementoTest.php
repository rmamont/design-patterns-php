<?php
/**
 * User: nnrepin
 * Date: 01.03.2017
 * Time: 17:53
 */

namespace DesignPatterns\Tests\Behavioral\Memento;


use DesignPatterns\Behavioral\Memento\Player;
use DesignPatterns\Behavioral\Memento\Game;
use PHPUnit_Framework_TestCase;


class MementoTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Game
     */
    protected static $game;

    /**
     * @var Player
     */
    protected static $player;

    public static function setUpBeforeClass()
    {
        self::$game = new Game();
        self::$player = new Player();
    }

    public function testPlayerGetDamage()
    {
        $this->assertEquals(Player::HIGHT_HO_COLOR, self::$player->getColorHealthPointBar());

        self::$player->getDamage(30);
        $this->assertEquals(Player::MID_HP_COLOR, self::$player->getColorHealthPointBar());
    }

    public function testPlayerGetHeals()
    {
        $this->assertEquals(Player::MID_HP_COLOR, self::$player->getColorHealthPointBar());

        self::$player->getHeals(10);
        $this->assertEquals(Player::HIGHT_HO_COLOR, self::$player->getColorHealthPointBar());
    }

    public function testPlayerSaveAndLoad()
    {
        $this->assertEquals(Player::HIGHT_HO_COLOR, self::$player->getColorHealthPointBar());
        self::$game->makeSave(self::$player);

        self::$player->getDamage(30);
        $this->assertEquals(Player::MID_HP_COLOR, self::$player->getColorHealthPointBar());

        self::$player->getDamage(30);
        $this->assertEquals(Player::LOW_HP_COLOR, self::$player->getColorHealthPointBar());

        self::$game->makeLoad(self::$player);
        $this->assertEquals(Player::HIGHT_HO_COLOR, self::$player->getColorHealthPointBar());
    }
}
