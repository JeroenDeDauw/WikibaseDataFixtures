<?php

namespace Wikibase\DataFixtures\Items;

use Wikibase\DataFixtures\Properties\InstanceOfProperty;
use Wikibase\DataModel\Entity\EntityIdValue;
use Wikibase\DataModel\Entity\Item;
use Wikibase\DataModel\Entity\ItemId;
use Wikibase\DataModel\Snak\PropertyValueSnak;
use Wikibase\DataModel\Statement\StatementList;
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
		$item->setStatements( $this->newStatements() );

		return $item;
	}

	public function newStatements() {
		$statements = new StatementList();

		$statements->addNewStatement(
			new PropertyValueSnak(
				( new InstanceOfProperty() )->newPropertyId(),
				new EntityIdValue( ( new State() )->newItemId() )
			),
			null,
			null,
			'kittens'
		);

		return $statements;
	}

	public function newItemId() {
		return new ItemId( 'Q183' );
	}

}
