<?php

namespace App\DataFixtures;

use App\Entity\Etudiant;
use App\Entity\Test;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $Etudiant = new Etudiant();
        $Etudiant->setNom('Yahya');
        $Etudiant->setPrenomm('Yahya');   
        $manager->persist($Etudiant); 
        $manager->flush();
    }
}
