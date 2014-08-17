<?php

namespace Wikibase\DataFixtures\Items;

use Wikibase\DataModel\Entity\Item;
use Wikibase\DataModel\Entity\ItemId;
use Wikibase\DataModel\Term\Fingerprint;

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class Germany {

	public function newFingerprint() {
		$fingerprint = Fingerprint::newEmpty();

		$fingerprint->setLabel( 'en', 'Germany' );
		$fingerprint->setLabel( 'de', 'Deutschland' );
		$fingerprint->setLabel( 'nl', 'Duitsland' );

		$fingerprint->setDescription( 'en', 'capital city and state of Germany' );
		$fingerprint->setDescription( 'de', 'Staat in Mitteleuropa' );

		return $fingerprint;
	}

	public function newItem() {
		$item = Item::newEmpty();
		$item->setId( $this->newItemId() );

		$item->setFingerprint( $this->newFingerprint() );

		return $item;
	}

	public function newItemId() {
		return new ItemId( 'Q183' );
	}

}
