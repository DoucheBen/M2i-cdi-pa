<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Annonce;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Created by PhpStorm.
 * User: benoit
 * Date: 08/07/2017
 * Time: 14:37
 */
class LoadAnnonceFixture extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $annonce=new Annonce();
        $annonce->setTitre('annonce 1');
        $annonce->setTexte('texte annonce 1');
        $annonce->setCodePostal('59940');
        $annonce->setPrix(10000);
        $annonce->setAnnonceur($this->getReference('user_3'));
        $manager->persist($annonce);
        $this->setReference('annonce_1',$annonce);

        // persistence
        $manager->flush();

        $annonce=new Annonce();
        $annonce->setTitre('annonce 2');
        $annonce->setTexte('texte annonce 2');
        $annonce->setCodePostal('62136');
        $annonce->setPrix(15000);
        $annonce->setAnnonceur($this->getReference('user_1'));
        $manager->persist($annonce);
        $this->setReference('annonce_2',$annonce);

        // persistence
        $manager->flush();

        $annonce=new Annonce();
        $annonce->setTitre('annonce 3');
        $annonce->setTexte('texte annonce 3');
        $annonce->setCodePostal('62400');
        $annonce->setPrix(20000);
        $annonce->setAnnonceur($this->getReference('user_2'));
        $manager->persist($annonce);
        $this->setReference('annonce_3',$annonce);

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
        return 2;
    }
}