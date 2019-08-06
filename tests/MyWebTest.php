<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MyWebTest extends WebTestCase
{
    public function testSomething()
    {
        $client = static::createClient();
        var_dump($client);

        $client->request('GET', '/');
        var_dump($client->getResponse());
    }
}
