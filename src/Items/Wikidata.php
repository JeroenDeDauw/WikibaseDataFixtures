<?php

namespace Wikibase\DataFixtures\Items;

use Wikibase\DataFixtures\Properties\InstanceOfProperty;
use Wikibase\DataModel\Entity\EntityIdValue;
use Wikibase\DataModel\Entity\Item;
use Wikibase\DataModel\Entity\ItemId;
use Wikibase\DataModel\Entity\Property;
use Wikibase\DataModel\SiteLinkList;
use Wikibase\DataModel\Snak\PropertyValueSnak;
use Wikibase\DataModel\Statement\StatementList;
use Wikibase\DataModel\Term\Fingerprint;

/**
 * @since 1.1.0
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class Wikidata {

	/**
	 * @var InstanceOfProperty
	 */
	private $instanceOf;

	/**
	 * @var WikimediaProject
	 */
	private $wmfProject;

	/**
	 * @var KnowledgeBase
	 */
	private $knowledgeBase;

	/**
	 * @var OnlineDatabase
	 */
	private $onlineDatabase;

	public function __construct() {
		$this->instanceOf = new InstanceOfProperty();

		$this->wmfProject = new WikimediaProject();
		$this->knowledgeBase = new KnowledgeBase();
		$this->onlineDatabase = new OnlineDatabase();
	}

	public function newItem() {
		$item = new Item( $this->newItemId() );

		$item->setFingerprint( $this->newFingerprint() );
		$item->setStatements( $this->newStatements() );
		$item->setSiteLinkList( $this->newSiteLinkList() );

		return $item;
	}

	public function newFingerprint() {
		$fingerprint = new Fingerprint();

		$fingerprint->setLabel( 'en', 'Wikidata' );
		$fingerprint->setLabel( 'de', 'Wikidata' );
		$fingerprint->setLabel( 'nl', 'Wikidata' );

		$fingerprint->setDescription( 'en', 'free knowledge database project hosted by Wikimedia and edited by volunteers' );
		$fingerprint->setDescription( 'de', 'freie Datenbank, die von der Wikimedia Foundation gehostet und von Freiwilligen bearbeitet wird' );

		return $fingerprint;
	}

	public function newSiteLinkList() {
		$links = new SiteLinkList();

		$links->addNewSiteLink( 'enwiki', 'Wikidata' );
		$links->addNewSiteLink( 'nlwiki', 'Wikidata' );

		return $links;
	}

	public function newStatements() {
		$statements = new StatementList();

		$statements->addNewStatement(
			new PropertyValueSnak(
				$this->instanceOf->newPropertyId(),
				new EntityIdValue( $this->wmfProject->newItemId() )
			),
			null,
			null,
			'first guid'
		);

		$statements->addNewStatement(
			new PropertyValueSnak(
				$this->instanceOf->newPropertyId(),
				new EntityIdValue( $this->knowledgeBase->newItemId() )
			),
			null,
			null,
			'second guid'
		);

		$statements->addNewStatement(
			new PropertyValueSnak(
				$this->instanceOf->newPropertyId(),
				new EntityIdValue( $this->onlineDatabase->newItemId() )
			),
			null,
			null,
			'third guid'
		);

		return $statements;
	}

	/**
	 * @return Item[]
	 */
	public function getItemDependencies() {
		return [
			$this->wmfProject->newItem(),
			$this->knowledgeBase->newItem(),
			$this->onlineDatabase->newItem(),
		];
	}

	/**
	 * @return Property[]
	 */
	public function getPropertyDependencies() {
		return [
			$this->instanceOf->newProperty()
		];
	}

	public function newItemId() {
		return new ItemId( 'Q2013' );
	}

}
