<?php

namespace BasketballBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testRegister()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/register');
    }

    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');
    }

    public function testSignin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/signIn');
    }

    public function testSignout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/signOut');
    }

    public function testMyprofile()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/myProfile');
    }

}
