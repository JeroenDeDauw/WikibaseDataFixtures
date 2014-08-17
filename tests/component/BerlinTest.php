<?php

namespace Tests\Wikibase\DataFixtures;

use Wikibase\DataFixtures\Items\Berlin;

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class BerlinTest extends \PHPUnit_Framework_TestCase {

	public function testCanConstructBerlinItem() {
		$berlin = new Berlin();

		$this->assertInstanceOf( 'Wikibase\DataModel\Entity\Item', $berlin->newItem() );
	}

}
