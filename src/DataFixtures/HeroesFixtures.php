<?php

namespace App\DataFixtures;

use App\Entity\Character;
use App\Entity\Equipment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class HeroesFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $character = new Character();
        $character->setRealName('Bruce Wayne');
        $character->setSex('Homme');
        $character->setHeroName('Batman');
        $character->setDescription('Batman chasse les malfaiteurs la nuit et les saisit d\'effroi. Il est pret à tout pour atteindre son but avec une seule règle: ne jamais tuer.');
        $character->setStory('Milliardaire et orphelin, il cherche à développer ses facultés afin de combattre le crime dans la ville de Gotham City.');
        $character->setIsNasty(false);
        $character->setStrength('Son intelligence et sa fortune qui lui permettent d\'avoir des équipements de pointe.');
        $character->setWeakness('Son humanité, sa moralité et sa vulnérabilité');
        $character->setUrl('https://voyage-onirique.com/wp-content/uploads/2021/03/batman-throne-4k-wallpaper.jpg');
        $character->addEquipment($this->getReference('fusil'));
        $manager->persist($character);

        $character2 = new Character();
        $character2->setRealName('Clark Kent');
        $character2->setSex('Homme');
        $character2->setHeroName('Superman');
        $character2->setDescription('Superman est aussi appelé l\'homme d\'acier.');
        $character2->setStory('Une partie des pouvoirs de Superman lui sont conférés par le Soleil jaune de la Terre dont il absorbe les radiations, ce qui lui donne de supers pouvoirs.');
        $character2->setIsNasty(false);
        $character2->setStrength('Une super-force, une super-vitesse, une super-endurance, une super-résistance et de supers 5 sens!');
        $character2->setWeakness('La kryptonite, la magie, perte de pouvoirs sous les radiations d\'un soleil rouge...');
        $character2->setUrl('https://getwallpapers.org/wp-content/uploads/2021/08/Superman-Wallpaper-1.jpg');
        $manager->persist($character2);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            EquipmentsFixtures::class,
        ];
    }
}
