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

        $equipment2 = new Equipment();
        $equipment2->setName('Bat-grenade');
        $equipment2->setType('Bombe');
        $equipment2->setDescription('La Bat-bombe est un explosif très puissant sous forme de boules qui s\'enclenchent manuellement et qui sont destinées le plus souvent à faire sauter des véhicules, des serrures blindées ou carrément pour créer un passage sur des murs épais. N\'étant pas plus grand qu\'une balle de golf, ces minis-explosifs sont faciles à transporter, nécessaires dans certains cas mais sont très rarement utilisés pour des raisons offensives.');
        $this->addReference('bombe', $equipment2);
        $manager->persist($equipment2);

        $manager->flush();
    }
}
