<?php

namespace Tests\Wikibase\DataFixtures;

use Wikibase\DataFixtures\Items\Berlin;
use Wikibase\DataFixtures\Items\Germany;
use Wikibase\DataFixtures\Items\State;

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class ItemConstructionTest extends \PHPUnit_Framework_TestCase {

	public function testCanConstructBerlinItem() {
		$this->assertInstanceOf( 'Wikibase\DataModel\Entity\Item', ( new Berlin() )->newItem() );
		$this->assertInstanceOf( 'Wikibase\DataModel\Entity\Item', ( new Germany() )->newItem() );
		$this->assertInstanceOf( 'Wikibase\DataModel\Entity\Item', ( new State() )->newItem() );
	}

}
