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
class WikimediaProject {

	public function newFingerprint() {
		$fingerprint = new Fingerprint();

		$fingerprint->setLabel( 'en', 'Wikimedia project' );

		$fingerprint->setDescription( 'en', 'project run by the Wikimedia Foundation' );

		return $fingerprint;
	}

	public function newItem() {
		$item = new Item( $this->newItemId() );

		$item->setFingerprint( $this->newFingerprint() );

		return $item;
	}

	public function newItemId() {
		return new ItemId( 'Q14827288' );
	}

}
