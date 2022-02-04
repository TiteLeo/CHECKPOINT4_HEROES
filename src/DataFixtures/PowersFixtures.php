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
        $power2->setName('Pare balles');
        $power2->setDescription('Ne permet pas de tuer le héro lorsqu\'il endosse son rôle');
        $this->addReference('balle', $power2);
        $manager->persist($power2);

        $power3 = new Power();
        $power3->setName('Régénération');
        $power3->setDescription('Un membre coupé? Pas grave, il repousse!');
        $this->addReference('régénération', $power3);
        $manager->persist($power3);

        $power4 = new Power();
        $power4->setName('Voler');
        $power4->setDescription('Pratique en cas d\'embouteillage!');
        $this->addReference('voler', $power4);
        $manager->persist($power4);

        $power5 = new Power();
        $power5->setName('Télépathie');
        $power5->setDescription('Adieu les secrets les plus intimes');
        $this->addReference('télépathie', $power5);
        $manager->persist($power5);

        $power5 = new Power();
        $power5->setName('Changer d\'aspect');
        $power5->setDescription('Fini les régimes!! Cool');
        $this->addReference('aspect', $power5);
        $manager->persist($power5);

        $power6 = new Power();
        $power6->setName('Téléportation');
        $power6->setDescription('Plus rapide que l\éclair');
        $this->addReference('téléportation', $power6);
        $manager->persist($power6);

        $power7 = new Power();
        $power7->setName('Invisibilité');
        $power7->setDescription('Pratique!');
        $this->addReference('invisibilité', $power7);
        $manager->persist($power7);

        $power8 = new Power();
        $power8->setName('Controler les éléments naturels');
        $power8->setDescription('Une vague géante ou un éclair foudroyant?');
        $this->addReference('meteo', $power8);
        $manager->persist($power8);

        $power9 = new Power();
        $power9->setName('Agilité');
        $power8->setDescription('Souple comme un bretzel...ou pas!');
        $this->addReference('agilité', $power9);
        $manager->persist($power9);


        $manager->flush();
    }
}
