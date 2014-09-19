<?php

namespace Afpa\ArtistBundle\Tests\Controller;

use Afpa\ArtistBundle\Entity\Artist;

class ArtistTest extends \PHPUnit_Framework_TestCase
{
	public function testGetCategory()
	{
		$artist = new Artist();
		$artist->setPopularity(50);

		$category = $artist->getCategory();
		$this->assertEquals($category, 'Star');
	}
}