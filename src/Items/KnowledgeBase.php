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
class KnowledgeBase {

	public function newFingerprint() {
		$fingerprint = new Fingerprint();

		$fingerprint->setLabel( 'en', 'knowledge base' );
		$fingerprint->setLabel( 'de', 'Wissensdatenbank' );
		$fingerprint->setLabel( 'fr', 'base de connaissance' );

		$fingerprint->setAliasGroup( 'de', [ 'Knowledgebase', 'Wissensbasis', 'Wissensbank', 'Knowledge Base' ] );

		$fingerprint->setDescription( 'en', 'information repository with multiple applications' );

		return $fingerprint;
	}

	public function newItem() {
		$item = new Item( $this->newItemId() );

		$item->setFingerprint( $this->newFingerprint() );

		return $item;
	}

	public function newItemId() {
		return new ItemId( 'Q593744' );
	}

}
