<?php

namespace Wikibase\DataFixtures\Items;

use Wikibase\DataModel\Entity\Item;
use Wikibase\DataModel\Entity\ItemId;
use Wikibase\DataModel\Term\Fingerprint;

/**
 * @since 1.1.0
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class OnlineDatabase {

	public function newFingerprint() {
		$fingerprint = new Fingerprint();

		$fingerprint->setLabel( 'en', 'online database' );
		$fingerprint->setDescription( 'en', 'database accessible from a network, including from the Internet' );

		return $fingerprint;
	}

	public function newItem() {
		$item = new Item( $this->newItemId() );

		$item->setFingerprint( $this->newFingerprint() );

		return $item;
	}

	public function newItemId() {
		return new ItemId( 'Q7094076' );
	}

}
