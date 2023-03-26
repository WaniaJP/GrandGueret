<?php

namespace App\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class ConnexionTest extends WebTestCase
{
    public function testSiLaConnexionEstUnSuccess(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        /**@var UrlGeneratorInterface $urlGenerator */
        $urlGenerator = $client->getContainer()->get("router");

        $crawler = $client->request('GET', $urlGenerator->generate('app_login'));

        $form = $crawler->filter("form")->form([
            "email" => 'lola@outlook.fr',
            "password" => 'lola92i'
        ]);

        $client->submit($form);

        $this->assertResponseStatusCodeSame(Response::HTTP_FOUND);
        $client->followRedirect();

        // $this->assertRouteSame('app_menu');
    }

    public function testSiLaConnexionEstUnSuccesAvecMauvaisPassword(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        /**@var UrlGeneratorInterface $urlGenerator */
        $urlGenerator = $client->getContainer()->get("router");

        $crawler = $client->request('GET', $urlGenerator->generate('app_login'));

        $form = $crawler->filter("form")->form([
            "email" => 'lola@outlook.fr',
            "password" => 'dsdsdsf'
        ]);

        $client->submit($form);

        $this->assertResponseStatusCodeSame(Response::HTTP_FOUND);
        $client->followRedirect();

        $this->assertRouteSame('app_login');
    }

    public function testSiLaConnexionEstUnSuccesAvecMauvaisEmail(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        /**@var UrlGeneratorInterface $urlGenerator */
        $urlGenerator = $client->getContainer()->get("router");

        $crawler = $client->request('GET', $urlGenerator->generate('app_login'));

        $form = $crawler->filter("form")->form([
            "email" => 'dsfsdg@outlook.fr',
            "password" => 'lola92i'
        ]);

        $client->submit($form);

        $this->assertResponseStatusCodeSame(Response::HTTP_FOUND);
        $client->followRedirect();

        $this->assertRouteSame('app_login');
    }
}
