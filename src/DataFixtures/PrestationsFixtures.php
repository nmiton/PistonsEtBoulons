<?php

namespace App\DataFixtures;

use App\Entity\Prestation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class UserFixtures
extends Fixture
implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Client administrator account
        $presta1 = new Prestation();
        $presta1->setNom("Réparation niveau 1")
        ->setTempsRealisation("2h")
        ->setCoutHT("45")
        ->setDescription("Nullam porta elit nunc, quis cursus ante condimentum nec. Fusce vel mi mollis odio feugiat bibendum. Donec sed urna tortor. Vestibulum vehicula a metus vel vulputate. Suspendisse luctus dolor lorem, in luctus nisi rhoncus non. Nam eget lacus malesuada, venenatis erat vel, tristique quam. Sed dictum blandit odio vel tristique.")
        ->setTypePrestation("Réparation");

        $presta2 = new Prestation();
        $presta2->setNom("Réparation niveau 2")
        ->setTempsRealisation("2h30")
        ->setCoutHT("90")
        ->setDescription("Nullam porta elit nunc, quis cursus ante condimentum nec. Fusce vel mi mollis odio feugiat bibendum. Donec sed urna tortor. Vestibulum vehicula a metus vel vulputate. Suspendisse luctus dolor lorem, in luctus nisi rhoncus non. Nam eget lacus malesuada, venenatis erat vel, tristique quam. Sed dictum blandit odio vel tristique.")
        ->setTypePrestation("Réparation");

        $presta3 = new Prestation();
        $presta3->setNom("Entretien niveau 2")
        ->setTempsRealisation("2h30")
        ->setCoutHT("90")
        ->setDescription("Nullam porta elit nunc, quis cursus ante condimentum nec. Fusce vel mi mollis odio feugiat bibendum. Donec sed urna tortor. Vestibulum vehicula a metus vel vulputate. Suspendisse luctus dolor lorem, in luctus nisi rhoncus non. Nam eget lacus malesuada, venenatis erat vel, tristique quam. Sed dictum blandit odio vel tristique.")
        ->setTypePrestation("Entretien");

        $presta4 = new Prestation();
        $presta4->setNom("Entretien niveau 1")
        ->setTempsRealisation("2h")
        ->setCoutHT("45")
        ->setDescription("Nullam porta elit nunc, quis cursus ante condimentum nec. Fusce vel mi mollis odio feugiat bibendum. Donec sed urna tortor. Vestibulum vehicula a metus vel vulputate. Suspendisse luctus dolor lorem, in luctus nisi rhoncus non. Nam eget lacus malesuada, venenatis erat vel, tristique quam. Sed dictum blandit odio vel tristique.")
        ->setTypePrestation("Entretien");
        
        $presta5 = new Prestation();
        $presta5->setNom("Carrosserie niveau 2")
        ->setTempsRealisation("3h")
        ->setCoutHT("100")
        ->setDescription("Nullam porta elit nunc, quis cursus ante condimentum nec. Fusce vel mi mollis odio feugiat bibendum. Donec sed urna tortor. Vestibulum vehicula a metus vel vulputate. Suspendisse luctus dolor lorem, in luctus nisi rhoncus non. Nam eget lacus malesuada, venenatis erat vel, tristique quam. Sed dictum blandit odio vel tristique.")
        ->setTypePrestation("Carrosserie");
        
        $presta6 = new Prestation();
        $presta6->setNom("Carrosserie niveau 1")
        ->setTempsRealisation("2h")
        ->setCoutHT("50")
        ->setDescription("Nullam porta elit nunc, quis cursus ante condimentum nec. Fusce vel mi mollis odio feugiat bibendum. Donec sed urna tortor. Vestibulum vehicula a metus vel vulputate. Suspendisse luctus dolor lorem, in luctus nisi rhoncus non. Nam eget lacus malesuada, venenatis erat vel, tristique quam. Sed dictum blandit odio vel tristique.")
        ->setTypePrestation("Carrosserie");

        $presta7 = new Prestation();
        $presta7->setNom("Préparation CT")
        ->setTempsRealisation("1h30")
        ->setCoutHT("50")
        ->setDescription("Nullam porta elit nunc, quis cursus ante condimentum nec. Fusce vel mi mollis odio feugiat bibendum. Donec sed urna tortor. Vestibulum vehicula a metus vel vulputate. Suspendisse luctus dolor lorem, in luctus nisi rhoncus non. Nam eget lacus malesuada, venenatis erat vel, tristique quam. Sed dictum blandit odio vel tristique.")
        ->setTypePrestation("Révision");

        $manager->persist($presta1);
        $manager->persist($presta2);
        $manager->persist($presta3);
        $manager->persist($presta4);
        $manager->persist($presta5);
        $manager->persist($presta6);
        $manager->persist($presta7);

        // Flush to DB
        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}
