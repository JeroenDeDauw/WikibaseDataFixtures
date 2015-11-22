<?php

namespace Wikibase\DataFixtures\Properties;

use Wikibase\DataModel\Entity\Property;
use Wikibase\DataModel\Entity\PropertyId;
use Wikibase\DataModel\Term\Fingerprint;

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class InstanceOfProperty {

	public function newFingerprint() {
		$fingerprint = new Fingerprint();

		$fingerprint->setLabel( 'en', 'instance of' );
		$fingerprint->setLabel( 'de', 'ist ein(e)' );

		$fingerprint->setDescription( 'en', 'this item is a concrete object (instance) of this class, category or object group' );
		$fingerprint->setDescription( 'de', 'Ausprägung oder Exemplar einer Sache' );

		return $fingerprint;
	}

	public function newProperty() {
		return new Property(
			$this->newPropertyId(),
			$this->newFingerprint(),
			'wikibase-item'
		);
	}

	public function newPropertyId() {
		return new PropertyId( 'P31' );
	}

}
