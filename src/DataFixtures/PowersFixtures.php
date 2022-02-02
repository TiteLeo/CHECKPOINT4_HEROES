<?php

namespace App\DataFixtures;

use App\Entity\Power;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PowersFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $power = new Power();
        $power->setName('Force');
        $power->setDescription('Rend capable d\'exploits physiques divers, jusqu\'à déplacer des planètes');
        $this->addReference('force', $power);
        $manager->persist($power);

        $power2 = new Power();
        $power2->setName('A l\'épreuve des balles');
        $power2->setDescription('Ne permet pas de tuer le héro lorsqu\'il endosse son rôle');
        $this->addReference('balle', $power2);
        $manager->persist($power2);

        $manager->flush();
    }
}
