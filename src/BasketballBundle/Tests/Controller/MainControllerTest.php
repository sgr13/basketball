<?php

namespace BasketballBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MainControllerTest extends WebTestCase
{
    public function testAddgame()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addGame');
    }

    public function testAddplayer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addPlayer');
    }

    public function testEditplayer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editPlayer');
    }

    public function testDeleteplayer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deletePlayer');
    }

    public function testEditgame()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editGame');
    }

    public function testDeletegame()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteGame');
    }

    public function testShowall()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showAll');
    }

    public function testShowgame()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showGame');
    }

    public function testAhowplayer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ahowPlayer');
    }

    public function testShowallplayers()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showAllPlayers');
    }

}
