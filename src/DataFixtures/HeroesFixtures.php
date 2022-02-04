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
        $character->addEquipment($this->getReference('pistolet'));
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
        $character->addPower($this->getReference('voler'));
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
        $character->addEquipment($this->getReference('armure'));
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
        $character4->addPower($this->getReference('agilité'));
        $character->addEquipment($this->getReference('toile'));
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
        $character->addEquipment($this->getReference('katana'));
        $character->addEquipment($this->getReference('pistolet'));
        $manager->persist($character5);

        $character6 = new Character();
        $character6->setRealName('Thor Odinson');
        $character6->setSex('Masculin');
        $character6->setHeroName('Thor');
        $character6->setStory('Thor est fils adultérin d\'Odin, seigneur des dieux d\'Asgard, et Jord, aussi 
        connue sous le nom de Gaea, une Ancienne Déesse de la Terre. Odin souhaitait engendrer un fils dont le pouvoir 
        dériverait aussi bien d\'Asgard que de la Terre (Midgard) et chercha donc une union avec Jord. Odin créa une 
        caverne en Norvège où Jord donna naissance à Thor. Quelques mois plus tard, une fois Thor allaité, Odin le 
        ramena à Asgard pour y être élevé. A partir de ce moment, l\'épouse légitime d\'Odin, la déesse Frigga, 
        considéra Thor comme son propre fils et l\'éleva comme tel. Thor n\'a appris que très récemment que Jord est sa mère naturelle. ');
        $character6->setIsNasty(false);
        $character6->setStrength('il est immunisé à toutes les maladies des mortels ; il possède une résistance, une endurance et une vitesse supérieures à celles des Terriens');
        $character6->setWeakness('Ragnarok');
        $character6->setUrl('https://img.wallpapersafari.com/tablet/800/1280/96/58/RzmpIN.jpg');
        $character6->addPower($this->getReference('force'));
        $character6->addPower($this->getReference('balle'));
        $character->addEquipment($this->getReference('marteau'));
        $manager->persist($character6);

        $character7 = new Character();
        $character7->setRealName('Mega Man');
        $character7->setSex('Undefined');
        $character7->setHeroName('Mega Man');
        $character7->setStory('En 20XX, un robot très sophistiqué du nom de Rock se fait transformer en robot de combat par son créateur, 
        le professeur Light, afin d\'affronter les armées de robots du sinistre docteur Wily. Il devient alors connu sous le nom de Mega Man');
        $character7->setIsNasty(false);
        $character7->setStrength('Peut copier les armes de ses ennemis');
        $character7->setWeakness('Aucun');
        $character7->setUrl('https://p1.hiclipart.com/preview/879/40/19/megaman-classic-pose-render-mega-man-wallpaper-png-clipart.jpg');
        $character7->addPower($this->getReference('force'));
        $character7->addPower($this->getReference('balle'));
        $character7->addPower($this->getReference('voler'));
        $character->addEquipment($this->getReference('pistolet'));
        $manager->persist($character7);

        $character8 = new Character();
        $character8->setRealName('Diana Prince');
        $character8->setSex('Feminin');
        $character8->setHeroName('Wonder Woman');
        $character8->setStory('Wonder Woman, de son vrai nom Diana, est une princesse originaire de Themyscira, "l\'île paradisiaque" 
        uniquement peuplée de femmes, les Amazones. Elle est la fille Fille d\'Hippolyta et du dieu grec Zeus. Après qu\'un homme s\'est 
        écrasé sur l\'île, Diana est envoyée sur Terre, aka le monde des hommes, afin de le ramener et de propager la paix et l’harmonie, 
        deux valeurs chères à son peuple. Elle se fait alors passer pour une secrétaire, Diana Prince.');
        $character8->setIsNasty(false);
        $character8->setStrength('Résistance à la magie et projection astrale');
        $character8->setWeakness('Sa naiveté et son humanité');
        $character8->setUrl('https://images.hdqwalls.com/wallpapers/2017-wonder-woman-4k-nn.jpg');
        $character8->addPower($this->getReference('force'));
        $character8->addPower($this->getReference('régénération'));
        $character->addEquipment($this->getReference('lasso'));
        $manager->persist($character8);

        $character9 = new Character();
        $character9->setRealName('Selina Kyle');
        $character9->setSex('Feminin');
        $character9->setHeroName('CatWoman');
        $character9->setStory('Issue d’une famille à problèmes, Catwoman, alias Selina Kyle, a eu une enfance compliquée. 
        Suite au décès de sa mère suicidaire, elle est placée dans un foyer avec sa sœur Maggie, puisque leur père alcoolique 
        est incapable de s’occuper d’elles. À 13 ans, Selina fugue de son centre d’accueil et s’installe à Gotham City, plus 
        précisément dans le quartier de l’East End, particulièrement malfamé. La jeune femme est alors obligée de se défendre 
        quotidiennement. Elle œuvre notamment pour protéger les prostituées. Elle lutte à sa manière contre la criminalité, 
        et n’hésite pas à voler pour survivre, ce qui fait d’elle une ennemie de Batman, qui est tout de même séduit par son 
        apparence de femme fatale.');
        $character9->setIsNasty(true);
        $character9->setStrength('Immunisée contre les poisons et toxines');
        $character9->setWeakness('Facilement distraite par un laser, comme un chat');
        $character9->setUrl('https://meragor.com/files/styles//ava_800_800_wm/igry-zhenschina-koshka_catwoman-39285.jpg');
        $character9->addPower($this->getReference('force'));
        $character9->addPower($this->getReference('agilité'));
        $manager->persist($character9);

        $character10 = new Character();
        $character10->setRealName('Natalia « Natasha » Romanova');
        $character10->setSex('Feminin');
        $character10->setHeroName('Black Widow');
        $character10->setStory('Natalia Romanova, une descendante de la famille impériale de Russie, est abandonnée très 
        jeune et recueillie par le soldat Ivan Petrovitch. Ce dernier veille sur elle jusqu\'à son âge adulte et l\'assiste ensuite 
        en tant que chauffeur. Natalia se révèle être une brillante élève et une athlète exceptionnelle, excellant notamment dans la
        danse classique, devenant célèbre en Union soviétique comme ballerine. Elle épouse le pilote d\'essai soviétique renommé Alexei 
        Shostakov, mais leur bonheur est de courte durée. Elle est ensuite recrutée par le KGB qui pensait que les Shostakov feraient 
        de bons agents secrets.');
        $character10->setIsNasty(false);
        $character10->setStrength('Athlète de niveau olympique, Maîtrise des arts martiaux');
        $character10->setWeakness('Stérile');
        $character10->setUrl('https://images5.alphacoders.com/107/thumb-350-1079623.jpg');
        $character10->addPower($this->getReference('force'));
        $character10->addPower($this->getReference('agilité'));
        $character->addEquipment($this->getReference('pistolet'));
        $character->addEquipment($this->getReference('sabre'));
        $manager->persist($character10);

        $character11 = new Character();
        $character11->setRealName('Kara Zor-El');
        $character11->setSex('Feminin');
        $character11->setHeroName('Super Girl');
        $character11->setStory('Un vaisseau spatial s\'écrase sur la Terre. Superman intervient et est surpris de voir 
        sortir une adolescente blonde habillée dans une version féminine de son costume. Elle lui explique que lors de l\'explosion 
        de Krypton, la ville d\'Argos a survécu sur un large morceau de la planète qui est parti à la dérive dans l\'espace. Mais les 
        citoyens ne sont pas tirés d\'affaire pour autant, le sol se transforme et la Kryptonite qui le compose devient mortelle. 
        Zor-El construit un vaisseau spatial pour envoyer sa fille Kara sur la Terre où il a découvert qu\'un kryptonien, Superman / Kal-El, 
        y vivait. Alura, sa femme, construit un costume identique à celui de Superman. Zor-El est le frère de Jor-El, le père de Kal-El, 
        Superman et Kara sont cousins');
        $character11->setIsNasty(false);
        $character11->setStrength('Même force que son cousin Superman');
        $character11->setWeakness('Kryptonite');
        $character11->setUrl('https://pbs.twimg.com/profile_images/1457759741283905542/GwhGqSsh_400x400.jpg');
        $character11->addPower($this->getReference('force'));
        $character11->addPower($this->getReference('balle'));
        $character11->addPower($this->getReference('voler'));
        $character11->addPower($this->getReference('régénération'));
        $manager->persist($character11);

        $character12 = new Character();
        $character12->setRealName('Harleen Quinzel');
        $character12->setSex('Feminin');
        $character12->setHeroName('Harley Quinn');
        $character12->setStory('Sa passion pour les grands fous la pousse à s\'occuper du Joker. Son autorisation d\'exercer
         lui est retirée et, ironie du sort, elle est internée dans l\'hôpital psychiatrique où elle exerçait. Une bonne partie de 
         celui-ci est détruite par un tremblement de terre qui secoue Gotham City ; Harleen Quinzel en profite pour s\'échapper en 
         enfilant un costume d\'arlequin (d\'où le jeu de mot que constitue son nom) et elle part aider son nouveau mentor dans 
         l\'accomplissement de son destin. De son vrai nom Harleen Quinzel tire son alias Harley Quinn.');
        $character12->setIsNasty(true);
        $character12->setStrength('Spécialiste dans le domaine de la psychiatrie');
        $character12->setWeakness('Sa folie');
        $character12->setUrl('https://images6.alphacoders.com/714/thumb-1920-714381.jpg');
        $character12->addPower($this->getReference('force'));
        $character12->addPower($this->getReference('agilité'));
        $character->addEquipment($this->getReference('pistolet'));
        $character->addEquipment($this->getReference('fusil'));
        $manager->persist($character12);

        $character13 = new Character();
        $character13->setRealName('Arthur Fleck');
        $character13->setSex('Masculin');
        $character13->setHeroName('Joker');
        $character13->setStory('De toutes les histoires contées sur les origines du Joker, il y en a une qui revient plus 
        régulièrement : l\'histoire de cet acteur comique raté qui est employé par une bande pour perpétrer un larcin dans une 
        usine chimique. Cette bande engage toujours un homme de paille qui tient le rôle de "leader du groupe" au cas où ils seraient 
        pris la main dans le sac. Dans ce cas, l\'attention est focalisée sur ce chef, Red Hood, qui porte un long casque rouge, 
        détournant l\'attention vers le centre de la cible en quelque sorte. Notre acteur raté est donc engagé pour tenir ce rôle. 
        Il accepte pour nourrir sa famille. Mais le casse est interrompu par le Batman, un justicier masqué qui sévit à Gotham 
        City depuis quelques mois. Notre inconnu trébuche lors de l\'altercation et tombe dans une cuve de produits chimiques. 
        Le jeune Batman ne peut rien faire pour le sauver. Pourtant, l\'inconnu survit mais il est défiguré : sa peau a blanchi, 
        ses cheveux ont verdi et ses muscles zygomatiques sont paralysés; dessinant à tout jamais sur son visage un rire grimaçant. 
        L\'homme perd tout y compris la raison. Le désormais nommé Joker attribue son état à Batman et jure de se venger. ');
        $character13->setIsNasty(true);
        $character13->setStrength('Tueur en série');
        $character13->setWeakness('Mal entouré');
        $character13->setUrl('https://i.pinimg.com/originals/66/a9/fa/66a9facfb8f3a8e3a728b8100746ac3b.jpg');
        $character->addEquipment($this->getReference('pistolet'));
        $manager->persist($character13);

        $character14 = new Character();
        $character14->setRealName('Loki');
        $character14->setSex('Masculin');
        $character14->setHeroName('Loki');
        $character14->setStory('Loki est le fils de Laufey (en), le roi des géants des glaces de Jötunheim qui mourut lors d\'un 
        combat contre Odin, roi des dieux d\'Asgard. Ce dernier décida d\'adopter Loki et l\'éleva aux côtés de son fils biologique, Thor. 
        Tout au long de son enfance, Loki ne put jamais se faire à sa famille d\'adoption. Les Asgardiens valorisaient avant tout le courage, 
        la force et les prouesses martiales, des qualités où Thor le dépassait de très loin. Les talents de Loki reposaient quant à eux dans 
        d\'autres domaines, notamment la ruse et la magie. Il se plongea donc dans les arts mystiques, et devint le dieu des Mensonges et de 
        la Tromperie. Sa jalousie pour Thor se mua en haine au fil des années, au point qu\'il en vint à souhaiter la mort de son frère adoptif.
        Ses machinations prirent de plus en plus une tournure machiavélique et dangereuse, au point qu\'il passa du surnom de dieu du Mensonge 
        à celui de dieu du Mal. ');
        $character14->setIsNasty(true);
        $character14->setStrength('Sa magie');
        $character14->setWeakness('Ses propres ambitions');
        $character14->setUrl('https://www.mordeo.org/files/uploads/2017/10/Tom-Hiddleston-In-Thor-Ragnarok-Movie-HD-Mobile-Wallpaper-950x1520.jpg');
        $character14->addPower($this->getReference('force'));
        $character14->addPower($this->getReference('régénération'));
        $manager->persist($character14);

        $character15 = new Character();
        $character15->setRealName('Ultron');
        $character15->setSex('Undefined');
        $character15->setHeroName('Ultron');
        $character15->setStory('Ultron était une intelligence artificielle d\'un programme de maintien de la paix créé par Tony 
        Stark à partir des codes cryptés dérivées de la Pierre de l\'Esprit encastrée dans le Sceptre de Loki, retravaillé par lui-même 
        et avec l\'aide de Bruce Banner.');
        $character15->setIsNasty(true);
        $character15->setStrength('Résistance à la magie et projection astrale');
        $character15->setWeakness('Sa naiveté et son humanité');
        $character15->setUrl('https://www.themarysue.com/wp-content/uploads/2021/02/ultron-is-a-complex-film.jpg');
        $manager->persist($character15);

        $character16 = new Character();
        $character16->setRealName('Thanos');
        $character16->setSex('Undefined');
        $character16->setHeroName('Thanos');
        $character16->setStory('Thanos est un Titan, une branche de la race des Éternels (race créée par les Célestes)1 qui quittèrent 
        la Terre il y a plusieurs siècles pour Titan, la lune de Saturne, et qui donna à leur peuple leur nom. Il est le fils du mentor 
        Alars et de Sui-san. Contrairement à son frère Éros, Thanos naît avec un physique ingrat : une peau gris-pourpre et d\'une texture 
        semblable à la roche1 et un corps massif. Il passe auprès des autres Titans pour anormal, porteur du mal génétique dit « syndrome 
        du Déviant » et incapable de succéder à son père à la tête du peuple. Ce rôle est octroyé à son frère Éros. Rejeté par les siens, 
        il trouve une compagne dans un temple souterrain oublié : dame Mort, qui fut son seul amour et sa seule consolation durant toute 
        son adolescence. Instruit par elle, il acquiert un pouvoir surpassant celui de tous les autres Titans. L’âge venant, il commence 
        à se révolter contre son père, et leurs disputes dégénérèrent en hostilité. À la suite d\'une expérience de Thanos, ayant coûté 
        la vie à plusieurs de ses sujets, il est banni de Titan. De son aveu même, quelque chose en lui se brisa pendant ces siècles d’exil. 
        Le cœur débordant de haine, il retourne sur Titan et lance une attaque nucléaire sur son propre monde, tuant des milliers de personnes, 
        y compris sa mère, la seule personne qu’il aurait peut-être voulu épargner. Son père et son frère étant dans l’espace lors de 
        l’attaque, ceux-ci échappèrent au massacre. Avec l\'aide des Vengeurs, Mentor put repousser Thanos, puis s\'attela à reconstruire 
        son monde. ');
        $character16->setIsNasty(true);
        $character16->setStrength('Omniscient et omnipotent (avec le Gant de l\'infini)');
        $character16->setWeakness('Son gant est sa force. Sans il est plus facile à battre.');
        $character16->setUrl('https://wallpapers.com/images/high/infinity-gauntlet-thanos-u5vwqgcyeeobsyan.jpg');
        $manager->persist($character16);

        $character17 = new Character();
        $character17->setRealName('Jean Grey');
        $character17->setSex('Feminin');
        $character17->setHeroName('Dark Phoenix');
        $character17->setStory('Les pouvoirs de Jean Grey se manifestent dès ses dix ans, lorsqu’elle lit malgré elle les pensées de son 
        amie Annie Richardson en train de mourir, percutée par une voiture. Jean sent l’esprit de son amie vaciller puis s’éteindre en mourant, 
        et manque même de mourir avec elle. Pendant trois ans, ses parents font appel à des spécialistes pour sortir Jean de son état 
        catatonique mais le seul qui y parvient est le professeur Charles Xavier. Celui-ci découvre qu’elle est une mutante dépassée par son 
        pouvoir télépathique. Il décide donc de bloquer psychiquement cette capacité pour la laisser évoluer à son rythme. Tout en restant 
        chez ses parents, Jean suit de nombreux entraînements avec le Pr Xavier destinés à développer et à contrôler ses pouvoirs 
        télékinésiques, jusqu’à ce qu’elle soit adolescente. ');
        $character17->setIsNasty(true);
        $character17->setStrength('Immenses capacités cosmiques');
        $character17->setWeakness('Sa jeunesse');
        $character17->setUrl('https://wallpapercave.com/wp/wp4347968.jpg');
        $manager->persist($character17);

        $character18 = new Character();
        $character18->setRealName('Michael Morbius ');
        $character18->setSex('Undefined');
        $character18->setHeroName('Morbius');
        $character18->setStory('Le Docteur Michael Morbius est un scientifique grec atteint d’une rare maladie sanguine. Pris par le 
        temps, il décide de se prendre lui-même pour cobaye d’un traitement expérimental. Il devient alors un vampire vivant. Contrairement 
        aux vampires des mythes, Morbius n’est pas vulnérable à la croix ou à l’eau bénite, et le soleil ne fait que l’affaiblir. En revanche 
        il peut voler, guérir de blessure et possède une force supérieure à la normale. Michael Morbius découvre également tardivement 
        que sa morsure est contagieuse et peut transformer ses victimes en vampires vivants comme lui. D’abord pris par sa soif de sang, il 
        décide de canaliser ses pulsions contre les criminels. Malgré plusieurs rechutes, Morbius tente de rester du bon côté et rejoint même 
        l’ARMOR, une subdivision du SHIELD, et tente d’empêcher une invasion de la Terre par les Marvel Zombies. Cependant, ses méthodes 
        violentes le mettent souvent face à d’autres héros, notamment Spider-Man.');
        $character18->setIsNasty(false);
        $character18->setStrength('Génie intellectuel, biologiste et biochimiste talentueux');
        $character18->setWeakness('Dépendance à la consommation de sang humain');
        $character18->setUrl('https://i.pinimg.com/originals/7e/32/c7/7e32c7ea702ebd4e3fddd2454c13fdf7.jpg');
        $manager->persist($character18);


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
