<?php

namespace App\DataFixtures;

use App\Entity\User;
use DateTime;
use DateTimeImmutable;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        $superAdmin = $this->createSuperAdmin();
        
        $manager->persist($superAdmin);

        $manager->flush();
    }


    /**
     * Cette methode permet de créer le Supzer Admin
     *
     * @return User
     */
    private function createSuperAdmin() : User
    {
        $superAdmin = new User();

        $passwordHashed = $this->hasher->hashPassword($superAdmin, "azerty1234A*");

        $superAdmin->setLastName("Latulipe");
        $superAdmin->setFirstName("Gégé");
        $superAdmin->setEmail("gege@gmail.com");
        $superAdmin->setRoles(["ROLE_ADMIN", "ROLE_USER"]);
        $superAdmin->setPassword($passwordHashed);
        $superAdmin->setVerifiedAt(new DateTimeImmutable());

        return $superAdmin;
    }
}
