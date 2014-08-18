<?php

namespace Wikibase\DataFixtures\Items;

use Wikibase\DataModel\Entity\Item;
use Wikibase\DataModel\Entity\ItemId;
use Wikibase\DataModel\Term\Fingerprint;

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class State {

	public function newFingerprint() {
		$fingerprint = Fingerprint::newEmpty();

		$fingerprint->setLabel( 'en', 'state' );
		$fingerprint->setLabel( 'de', 'Staat' );

		$fingerprint->setDescription( 'en', 'organised community living under a system of government; either a sovereign state, constituent state, or federated state' );
		$fingerprint->setDescription( 'de', 'mehrdeutiger Begriff verschiedener Sozial- und Staatswissenschaften' );

		return $fingerprint;
	}

	public function newItem() {
		$item = Item::newEmpty();
		$item->setId( $this->newItemId() );

		$item->setFingerprint( $this->newFingerprint() );

		return $item;
	}

	public function newItemId() {
		return new ItemId( 'Q7275' );
	}

}
