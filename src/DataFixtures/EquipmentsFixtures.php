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
        $this->addReference('fusil', $equipment);
        $manager->persist($equipment);

        $equipment2 = new Equipment();
        $equipment2->setName('Grenade');
        $equipment2->setType('Bombe');
        $this->addReference('bombe', $equipment2);
        $manager->persist($equipment2);

        $equipment3 = new Equipment();
        $equipment3->setName('Pistolet');
        $equipment3->setType('Arme à feu');
        $this->addReference('pistolet', $equipment3);
        $manager->persist($equipment3);

        $equipment4 = new Equipment();
        $equipment4->setName('Arc');
        $equipment4->setType('Arme blanche');
        $this->addReference('arc', $equipment4);
        $manager->persist($equipment4);

        $equipment5 = new Equipment();
        $equipment5->setName('Sabres');
        $equipment5->setType('Arme blanche');
        $this->addReference('sabre', $equipment5);
        $manager->persist($equipment5);

        $equipment6 = new Equipment();
        $equipment6->setName('Katana');
        $equipment6->setType('Arme blanche');
        $this->addReference('katana', $equipment6);
        $manager->persist($equipment6);

        $equipment7 = new Equipment();
        $equipment7->setName('Cape');
        $equipment7->setType('Arme blanche');
        $this->addReference('cape', $equipment7);
        $manager->persist($equipment7);

        $equipment8 = new Equipment();
        $equipment8->setName('Armure');
        $equipment8->setType('Arme blanche');
        $this->addReference('armure', $equipment8);
        $manager->persist($equipment8);

        $equipment9 = new Equipment();
        $equipment9->setName('Bouclier');
        $equipment9->setType('Arme blanche');
        $this->addReference('bouclier', $equipment9);
        $manager->persist($equipment9);

        $equipment10 = new Equipment();
        $equipment10->setName('Lasso');
        $equipment10->setType('Arme blanche');
        $this->addReference('lasso', $equipment10);
        $manager->persist($equipment10);

        $manager->flush();
    }
}
