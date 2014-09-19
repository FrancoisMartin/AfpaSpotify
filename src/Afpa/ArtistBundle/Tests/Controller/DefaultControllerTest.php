<?php

namespace Afpa\ArtistBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
	public function testVoir()
	{
        $client = static::createClient();
        $crawler = $client->request('GET', '/artist/4gzpq5DPGxSnKTe4SA8HAU');

        $this->assertTrue($crawler->filter('html:contains("Coldplay")')->count() > 0);
        // Ou bien
        // $this->assertEquals('Coldplay', $crawler->filter('.content h3')->text());
	}
}