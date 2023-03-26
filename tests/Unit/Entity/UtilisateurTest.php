<?php

namespace App\Tests\Unit\Entity;

use App\Entity\Utilisateur;
use DateTime;
use Faker;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\VarDumper\Cloner\Data;

class UtilisateurTest extends KernelTestCase
{
    public function getEntity() : Utilisateur {
        $faker = Faker\Factory::create('fr-FR');
        $utilisateur = new Utilisateur();
        $utilisateur->setNom($faker->firstName());
        $utilisateur->setPrenom($faker->lastName());
        $utilisateur->setEmail($faker->email());
        $utilisateur->setAdresse($faker->address());
        $utilisateur->setCodePostal($faker->postcode());
        $utilisateur->setDateNaissance(new \DateTimeImmutable);
        $utilisateur->setVille($faker->city());
        $utilisateur->setPassword('motdepassetestbasic');
        return $utilisateur;
    }
    public function testUtilisateurValide(): void
    {
        $kernel = self::bootKernel();
        $container = static::getContainer();
        $utilisateur = $this->getEntity();
        $errors= $container->get('validator')->validate($utilisateur);

        $this->assertCount(0, $errors);

        $this->assertSame('test', $kernel->getEnvironment());
        // $routerService = static::getContainer()->get('router');
        // $myCustomService = static::getContainer()->get(CustomService::class);
    }

    public function testUtilisateurNomInvalide(): void
    {
        $kernel = self::bootKernel();
        $container = static::getContainer();
        $utilisateur = $this->getEntity();
        $utilisateur->setNom('');
        $errors= $container->get('validator')->validate($utilisateur);

        $this->assertCount(1, $errors);
        // $routerService = static::getContainer()->get('router');
        // $myCustomService = static::getContainer()->get(CustomService::class);
    }

    public function testUtilisateurPrenomInvalide(): void
    {
        $kernel = self::bootKernel();
        $container = static::getContainer();
        $utilisateur = $this->getEntity();
        $utilisateur->setPrenom('');
        $errors= $container->get('validator')->validate($utilisateur);

        $this->assertCount(1, $errors);

        $this->assertSame('test', $kernel->getEnvironment());
        // $routerService = static::getContainer()->get('router');
        // $myCustomService = static::getContainer()->get(CustomService::class);
    }

    public function testUtilisateurEmailInvalide(): void
    {
        $kernel = self::bootKernel();
        $container = static::getContainer();
        $utilisateur = $this->getEntity();
        $utilisateur->setEmail('');
        $errors= $container->get('validator')->validate($utilisateur);

        $this->assertCount(1, $errors);

        $this->assertSame('test', $kernel->getEnvironment());
        // $routerService = static::getContainer()->get('router');
        // $myCustomService = static::getContainer()->get(CustomService::class);
    }

    public function testUtilisateurAdresseInvalide(): void
    {
        $kernel = self::bootKernel();
        $container = static::getContainer();
        $utilisateur = $this->getEntity();
        $utilisateur->setAdresse('');
        $errors= $container->get('validator')->validate($utilisateur);

        $this->assertCount(1, $errors);

        $this->assertSame('test', $kernel->getEnvironment());
        // $routerService = static::getContainer()->get('router');
        // $myCustomService = static::getContainer()->get(CustomService::class);
    }

    public function testUtilisateurCodeInvalide(): void
    {
        $kernel = self::bootKernel();
        $container = static::getContainer();
        $utilisateur = $this->getEntity();
        $utilisateur->setCodePostal('');
        $errors= $container->get('validator')->validate($utilisateur);

        $this->assertCount(1, $errors);

        $this->assertSame('test', $kernel->getEnvironment());
        // $routerService = static::getContainer()->get('router');
        // $myCustomService = static::getContainer()->get(CustomService::class);
    }

    public function testUtilisateurDateInvalide(): void
    {
        $kernel = self::bootKernel();
        $container = static::getContainer();
        $utilisateur = $this->getEntity();
        $utilisateur->setVille('');
        $errors= $container->get('validator')->validate($utilisateur);

        $this->assertCount(1, $errors);

        $this->assertSame('test', $kernel->getEnvironment());
        // $routerService = static::getContainer()->get('router');
        // $myCustomService = static::getContainer()->get(CustomService::class);
    }

    public function testUtilisateurMDPInvalide(): void
    {
        $kernel = self::bootKernel();
        $container = static::getContainer();
        $utilisateur = $this->getEntity();
        $utilisateur->setPassword('');
        $errors= $container->get('validator')->validate($utilisateur);

        $this->assertCount(1, $errors);

        $this->assertSame('test', $kernel->getEnvironment());
        // $routerService = static::getContainer()->get('router');
        // $myCustomService = static::getContainer()->get(CustomService::class);
    }
}
