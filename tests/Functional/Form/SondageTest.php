<?php

namespace App\Tests\Functional\Form;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SondageTest extends WebTestCase
{
    public function testSomething(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
    }
}
