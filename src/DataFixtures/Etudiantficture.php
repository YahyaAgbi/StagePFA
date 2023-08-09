<?php

namespace App\DataFixtures;

use App\Entity\Etudiant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Etudiantficture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i=1;$i<5;$i++){
        $Etudiant = new Etudiant();
        $Etudiant->setNom('Yahya'.  $i);
        $Etudiant->setPrenomm('Agbi'  .$i);
        $manager->persist($Etudiant);}

        $manager->flush();
    }
}
