<?php

namespace Wikibase\DataFixtures\Properties;

use Wikibase\DataModel\Entity\Property;
use Wikibase\DataModel\Entity\PropertyId;
use Wikibase\DataModel\Term\Fingerprint;

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class PostalCodeProperty {

	public function newFingerprint() {
		$fingerprint = new Fingerprint();

		$fingerprint->setLabel( 'en', 'postal code' );
		$fingerprint->setAliasGroup( 'en', [ 'zip code', 'post code' ] );
		$fingerprint->setDescription( 'en', 'identifier assigned by postal authorities for the subject area' );

		return $fingerprint;
	}

	public function newProperty() {
		return new Property(
			$this->newPropertyId(),
			$this->newFingerprint(),
			'string'
		);
	}

	public function newPropertyId() {
		return new PropertyId( 'P281' );
	}

}
