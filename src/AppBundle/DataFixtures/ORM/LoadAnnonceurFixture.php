<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Annonceur;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Created by PhpStorm.
 * User: benoit
 * Date: 08/07/2017
 * Time: 14:30
 */
class LoadAnnonceurFixture extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $annonceur=new Annonceur();
        $annonceur->setPrenom('prenom1');
        $annonceur->setNom('nom1');
        $annonceur->setEmail('prenom1.nom1@mail.com');
        $annonceur->setPassword('123');
        $annonceur->setAnnonces($this->addReference('annonce_2',$annonceur));
        $manager->persist($annonceur);
        $this->setReference('user_1',$annonceur);

        // persistence
        $manager->flush();

        $annonceur=new Annonceur();
        $annonceur->setPrenom('prenom2');
        $annonceur->setNom('nom2');
        $annonceur->setEmail('prenom2.nom2@mail.com');
        $annonceur->setPassword('123');
        $annonceur->setAnnonces($this->addReference('annonce_3',$annonceur));
        $manager->persist($annonceur);
        $this->setReference('user_2',$annonceur);

        // persistence
        $manager->flush();

        $annonceur=new Annonceur();
        $annonceur->setPrenom('prenom3');
        $annonceur->setNom('nom3');
        $annonceur->setEmail('prenom3.nom3@mail.com');
        $annonceur->setPassword('123');
        $annonceur->setAnnonces($this->addReference('annonce_1',$annonceur));
        $manager->persist($annonceur);
        $this->setReference('user_3',$annonceur);

        // persistence
        $manager->flush();

    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }
}