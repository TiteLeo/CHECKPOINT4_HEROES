<?php

namespace App\DataFixtures;

use App\Entity\Equipment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EquipmentsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $equipment = new Equipment();
        $equipment->setName('Fusil à impulsion électromagnétique');
        $equipment->setType('Fusil');
        $equipment->setDescription('Cette arme non létale a le moyen d’émettre une onde électromagnétique invisible de très forte amplitude, afin de détruire ou de mettre hors d\'état de marche tout appareil électrique ou électronique pour une courte durée, dans un rayon d\'action déterminé ou une ligne de visée spécifique.');
        $this->addReference('fusil', $equipment);
        $manager->persist($equipment);

        $manager->flush();
    }
}
