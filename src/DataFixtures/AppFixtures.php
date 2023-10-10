<?php

namespace App\DataFixtures;

use App\Entity\Company;
use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for ($i=0; $i < 50
        ; $i++) { 
            $company = new Company();
            $company->setName($faker->company())
                    ->setSiret($faker->siret())
                    ->setAddress($faker->address());
            
   
            $manager->persist($company);
            
        }

        $manager->flush();
    }
}
