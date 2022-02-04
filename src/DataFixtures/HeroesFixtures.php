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
        $character->setSex('Masculin');
        $character->setHeroName('Batman');
        $character->setStory('Après avoir assisté impuissant à l\'assassinat de ses parents par un voleur dans une rue de Gotham City,
         il décide de devenir un justicier et de lutter contre le crime. Après cet événement tragique, Bruce Wayne pratique intensivement 
         les arts martiaux, la boxe, tout en étudiant les sciences. Il choisi de devenir Batman lorsqu\'une chauve-souris rentre dans le 
         manoir familial et le terrorise..');
        $character->setIsNasty(false);
        $character->setStrength('Son intelligence et sa fortune qui lui permettent d\'avoir des équipements de pointe.');
        $character->setWeakness('Son humanité, sa moralité et sa vulnérabilité');
        $character->setUrl('https://voyage-onirique.com/wp-content/uploads/2021/03/batman-throne-4k-wallpaper.jpg');
        $character->addEquipment($this->getReference('fusil'));
        $character->addEquipment($this->getReference('bombe'));
        $character->addPower($this->getReference('force'));
        $character->addPower($this->getReference('balle'));
        $manager->persist($character);

        $character2 = new Character();
        $character2->setRealName('Clark Kent');
        $character2->setSex('Masculin');
        $character2->setHeroName('Superman');
        $character2->setStory('Superman est né sur la planète Krypton et a reçu le nom de Kal-El. Alors qu’il n’est qu’un bébé, 
        ses parents l’ont envoyé sur Terre dans un petit vaisseau spatial quelques instants avant que Krypton ne soit détruit dans un 
        cataclysme naturel. Son navire a atterri dans une ferme aux USA, près de la ville fictive de Smallville. Il a été trouvé et adopté 
        par les fermiers Jonathan et Martha Kent, qui l’ont appelé Clark Kent. Plus tard Clark a développé diverses capacités surhumaines, 
        telles qu’une force incroyable et une peau imperméable. Ses parents adoptifs lui ont conseillé d’utiliser ses capacités au profit 
        de l’humanité, et il a décidé de combattre le crime en tant que justicier. Pour protéger sa vie privée, il se transforme en costume 
        coloré et utilise l’alias « Superman » pour combattre le crime. Clark Kent réside dans la ville fictive américaine de Metropolis, 
        où il travaille comme journaliste pour le magazine Daily Planet. Les personnages de soutien de Superman comprennent son intérêt 
        pour l’amour et son collègue journaliste Lois Lane, le photographe du Daily Planet Jimmy Olsen et le rédacteur en chef Perry White.');
        $character2->setIsNasty(false);
        $character2->setStrength('Une super-force, une super-vitesse, une super-endurance, une super-résistance');
        $character2->setWeakness('La kryptonite, la magie, perte de pouvoirs sous les radiations d\'un soleil rouge...');
        $character2->setUrl('https://getwallpapers.org/wp-content/uploads/2021/08/Superman-Wallpaper-1.jpg');
        $character2->addPower($this->getReference('force'));
        $character2->addPower($this->getReference('balle'));
        $manager->persist($character2);

        $character3 = new Character();
        $character3->setRealName('Anthony Stark');
        $character3->setSex('Masculin');
        $character3->setHeroName('Iron Man');
        $character3->setStory('Iron Man, est le fils de Howard et Maria Stark, dont la compagnie Stark Industries était l\'une des 
        plus importantes corporations US. A l\'âge de sept ans, Tony fut envoyé à l\'internat par son père dans l\'espoir de l\'« endurcir ».
        Tony trouvait difficile à se lier avec des gens, et il devint fasciné par les machines, qui pouvaient être contrôlés ou réparés.
        Tony est un super héros qui tire ses pouvoirs de sa puissante armure de haute techonologie conçue à l\'aide de ses compétences 
        impressionnantes en technologie. Cette armure peut voler jusqu\'à atteindre Mach 5, lui confère une force très supérieure à celle 
        d\'un humain, est équipée de multiples armes et senseurs, de systèmes de soin, etc.');
        $character3->setIsNasty(false);
        $character3->setStrength('Force surhumaine, grande intelligence');
        $character3->setWeakness('C\'est un humain');
        $character3->setUrl('https://avatarfiles.alphacoders.com/210/thumb-1920-210567.jpg');
        $character3->addPower($this->getReference('force'));
        $character3->addPower($this->getReference('balle'));
        $manager->persist($character3);

        $character4 = new Character();
        $character4->setRealName('Peter Parker');
        $character4->setSex('Masculin');
        $character4->setHeroName('Spider Man');
        $character4->setStory(' Peter Parker, orphelin à l\'âge de six ans, est élevé par son oncle et sa tante, Benjamin et May Parker. Peter est mordu 
        par une araignée radioactive à la suite d\'une expérience. Il va alors développer des super-pouvoirs, dont une force 
        surhumaine, une grande agilité, et la capacité de "coller" aux parois. A la mort de son oncle, tué par un cambrioleur, 
        Peter Parker, alias Spider-Man, va se lancer à la poursuite de cet assassin. Sa vocation de justicier sera donc de 
        lutter contre le crime, et de suivre ainsi les paroles de son oncle "Un grand pouvoir implique de grandes responsabilités". ');
        $character4->setIsNasty(false);
        $character4->setStrength('Agilité, micro-poils sur les doigts lui permettant de se déplacer sur toutes les surfaces');
        $character4->setWeakness('Son humanité');
        $character4->setUrl('https://www.art-deco-stickers.fr/18191-tm_thickbox_default/stickers-muraux-geant-spiderman.jpg');
        $character4->addPower($this->getReference('force'));
        $character4->addPower($this->getReference('balle'));
        $manager->persist($character4);

        $character5 = new Character();
        $character5->setRealName('Wade Wilson');
        $character5->setSex('Masculin');
        $character5->setHeroName('DeadPool');
        $character5->setStory('Lors d’une mission, Wade tua son coéquipier Slayback et fut, du coup, expulsé de l’Arme-X puis interné 
        à l’Hospice, officiellement un centre gouvernemental où les agents surhumains ratés étaient soignés. Mais, en réalité, et sans que 
        le gouvernement canadien ne s’en doutât, les patients de l’Hospice servaient de sujets expérimentaux pour le Dr Killebrew et son 
        sadique assistant, Ajax, les patients effectuant des paris sur la durée de survie de chaque cobaye. Killebrew soumit Wade à diverses 
        tortures expérimentales pour sa seule satisfaction personnelle. Au cours de ces traitements, Wade forma une relation plus ou moins 
        amoureuse avec l’entité cosmique appelée la Mort, qui en vint à le considérer comme un esprit jumeau. Mais la force émotionnelle de 
        Wade durant toutes ces épreuves lui permit de gagner le respect des autres patients de l’Hospice. C’est alors qu’Ajax, furieux des 
        incessantes provocations de Wade, lobotomisa l’un des amis de l’ancien mercenaire. Poussé par la Mort, Wade tua son ami pour mettre 
        un terme à ses souffrances ; toutefois, selon les règles de Killebrew, tout patient qui en tuait un autre devait être exécuté 
        immédiatement et, du coup, Ajax arracha le cœur de Wade, le laissant pour mort ; mais la soif de vengeance de ce dernier était 
        telle qu’elle déclencha son facteur de guérison accélérée, conduisant à régénérer entièrement son cœur, même s’il fut incapable de 
        soigner son corps couvert de cicatrices. Wade s’attaqua alors à Ajax, le laissant à son tour pour mort, avant d’adopter le nom de 
        Deadpool (une allusion aux paris de l’Hospice [« deadpool » se traduisant comme « cagnotte des morts »] ) et de s’échapper de 
        l’Hospice avec les autres patients. Après son évasion, Deadpool servit un temps comme exécuteur aux côtés du criminel modifié par 
        chirurgie, Hammerhead. Mais il reprit rapidement ses activités de mercenaire, revêtant un uniforme distinctif, en accord avec sa 
        nouvelle identité. Au cours de cette seconde carrière, il fut engagé pendant un temps par le Caïd (Wilson Fisk) ; il se heurta aussi 
        à Wolverine, devenu un espion au service du gouvernement canadien. Vers cette époque, il retrouva également Blind Al, la faisant 
        prisonnière et la séquestrant dans sa propre maison. Les tentatives d’Al de s’échapper entraînèrent la mort de ceux qui venaient 
        l’aider, la poussant à accepter son enfermement. ');
        $character5->setIsNasty(false);
        $character5->setStrength('Deadpool est un exceptionnel combattant à mains nues, maîtrisant de nombreuses techniques martiales.');
        $character5->setWeakness('Sa folie');
        $character5->setUrl('https://www.enjpg.com/img/2020/deadpool-72.jpg');
        $character5->addPower($this->getReference('force'));
        $character5->addPower($this->getReference('balle'));
        $character5->addPower($this->getReference('régénération'));
        $manager->persist($character5);

        $character6 = new Character();
        $character6->setRealName('');
        $character6->setSex('');
        $character6->setHeroName('');
        $character6->setStory('');
        $character6->setIsNasty(false);
        $character6->setStrength('');
        $character6->setWeakness('');
        $character6->setUrl('');
        $character6->addPower($this->getReference('force'));
        $character6->addPower($this->getReference('balle'));
        $manager->persist($character6);

        $character7 = new Character();
        $character7->setRealName('');
        $character7->setSex('');
        $character7->setHeroName('');
        $character7->setStory('');
        $character7->setIsNasty(false);
        $character7->setStrength('');
        $character7->setWeakness('');
        $character7->setUrl('');
        $character7->addPower($this->getReference('force'));
        $character7->addPower($this->getReference('balle'));
        $manager->persist($character7);

        $character8 = new Character();
        $character8->setRealName('');
        $character8->setSex('');
        $character8->setHeroName('');
        $character8->setStory('');
        $character8->setIsNasty(false);
        $character8->setStrength('');
        $character8->setWeakness('');
        $character8->setUrl('');
        $character8->addPower($this->getReference('force'));
        $character8->addPower($this->getReference('balle'));
        $manager->persist($character8);

        $character9 = new Character();
        $character9->setRealName('');
        $character9->setSex('');
        $character9->setHeroName('');
        $character9->setStory('');
        $character9->setIsNasty(false);
        $character9->setStrength('');
        $character9->setWeakness('');
        $character9->setUrl('');
        $character9->addPower($this->getReference('force'));
        $character9->addPower($this->getReference('balle'));
        $manager->persist($character9);

        $character10 = new Character();
        $character10->setRealName('');
        $character10->setSex('');
        $character10->setHeroName('');
        $character10->setStory('');
        $character10->setIsNasty(false);
        $character10->setStrength('');
        $character10->setWeakness('');
        $character10->setUrl('');
        $character10->addPower($this->getReference('force'));
        $character10->addPower($this->getReference('balle'));
        $manager->persist($character10);

        $character11 = new Character();
        $character11->setRealName('');
        $character11->setSex('');
        $character11->setHeroName('');
        $character11->setStory('');
        $character11->setIsNasty(false);
        $character11->setStrength('');
        $character11->setWeakness('');
        $character11->setUrl('');
        $character11->addPower($this->getReference('force'));
        $character11->addPower($this->getReference('balle'));
        $manager->persist($character11);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            EquipmentsFixtures::class,
            PowersFixtures::class,
        ];
    }
}
