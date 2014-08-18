<?php

namespace Wikibase\DataFixtures\Properties;

use Wikibase\DataModel\Entity\Property;
use Wikibase\DataModel\Entity\PropertyId;
use Wikibase\DataModel\Term\Fingerprint;

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class CountryProperty {

	public function newFingerprint() {
		$fingerprint = Fingerprint::newEmpty();

		$fingerprint->setLabel( 'en', 'country' );
		$fingerprint->setLabel( 'de', 'Staat' );
		$fingerprint->setLabel( 'nl', 'Land' );

		$fingerprint->setDescription( 'en', 'sovereign state of this item' );
		$fingerprint->setDescription( 'de', 'souveräner Staat, in dem sich das Objekt befindet' );

		return $fingerprint;
	}

	public function newProperty() {
		$property = Property::newFromType( 'wikibase-item' );
		$property->setId( $this->newPropertyId() );

		$property->setFingerprint( $this->newFingerprint() );

		return $property;
	}

	public function newPropertyId() {
		return new PropertyId( 'P17' );
	}

}
