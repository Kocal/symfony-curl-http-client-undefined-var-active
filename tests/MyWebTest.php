<?php

namespace App\Tests;

class MyWebTest extends MyWebTestCase
{
    public function testSomething()
    {
        $client = static::createClient();
        var_dump($client);

        $client->request('GET', '/');
        var_dump($client->getResponse());
    }
}
