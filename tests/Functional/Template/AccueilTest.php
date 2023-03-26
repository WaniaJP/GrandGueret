<?php

namespace App\Tests\Functional\Template;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AccueilTest extends WebTestCase
{
    public function testSomething(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();

        $button = $crawler->selectLink('Sondage');
        $this->assertEquals(1, count($button));
        $this->assertSelectorTextContains('h1', 'Découvrez tout sur votre santé !');
    }
}
