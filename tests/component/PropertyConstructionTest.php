<?php

namespace Tests\Wikibase\DataFixtures;

use Wikibase\DataFixtures\Properties\CountryProperty;
use Wikibase\DataFixtures\Properties\InstanceOfProperty;
use Wikibase\DataFixtures\Properties\PostalCodeProperty;

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class PropertyConstructionTest extends \PHPUnit_Framework_TestCase {

	public function testCanConstructProperties() {
		$this->assertInstanceOf( 'Wikibase\DataModel\Entity\Property', ( new CountryProperty() )->newProperty() );
		$this->assertInstanceOf( 'Wikibase\DataModel\Entity\Property', ( new InstanceOfProperty() )->newProperty() );
		$this->assertInstanceOf( 'Wikibase\DataModel\Entity\Property', ( new PostalCodeProperty() )->newProperty() );
	}

}
