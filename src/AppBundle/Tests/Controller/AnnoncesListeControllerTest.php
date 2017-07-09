<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AnnoncesListeControllerTest extends WebTestCase
{
    public function testAnnonceliste()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/annonceListe');
    }

}
