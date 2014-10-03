<?php

namespace Wikibase\DataFixtures\Items;

use DataValues\StringValue;
use Wikibase\DataFixtures\Properties\CountryProperty;
use Wikibase\DataFixtures\Properties\InstanceOfProperty;
use Wikibase\DataFixtures\Properties\PostalCodeProperty;
use Wikibase\DataModel\Entity\EntityIdValue;
use Wikibase\DataModel\Entity\Item;
use Wikibase\DataModel\Entity\Property;
use Wikibase\DataModel\SiteLinkList;
use Wikibase\DataModel\Snak\PropertyValueSnak;
use Wikibase\DataModel\Statement\StatementList;
use Wikibase\DataModel\Term\Fingerprint;

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class Berlin {

	/**
	 * @var Germany
	 */
	private $germany;

	/**
	 * @var City
	 */
	private $city;

	/**
	 * @var CountryProperty
	 */
	private $country;

	/**
	 * @var InstanceOfProperty
	 */
	private $instanceOf;

	/**
	 * @var PostalCodeProperty
	 */
	private $postCode;

	public function __construct() {
		$this->germany = new Germany();
		$this->city = new City();

		$this->country = new CountryProperty();
		$this->instanceOf = new InstanceOfProperty();
		$this->postCode = new PostalCodeProperty();
	}

	public function newItem() {
		$item = Item::newEmpty();
		$item->setId( 64 );

		$item->setFingerprint( $this->newFingerprint() );
		$item->setStatements( $this->newStatements() );
		$item->setSiteLinkList( $this->newSiteLinkList() );

		return $item;
	}

	public function newFingerprint() {
		$fingerprint = Fingerprint::newEmpty();

		$fingerprint->setLabel( 'en', 'Berlin' );
		$fingerprint->setLabel( 'de', 'Berlin' );
		$fingerprint->setLabel( 'nl', 'Berlijn' );

		$fingerprint->setDescription( 'en', 'capital city and state of Germany' );
		$fingerprint->setDescription( 'de', 'Hauptstadt von Deutschland' );

		return $fingerprint;
	}

	public function newSiteLinkList() {
		$links = new SiteLinkList();

		$links->addNewSiteLink( 'enwiki', 'Berlin' );
		$links->addNewSiteLink( 'nlwiki', 'Berlijn' );

		return $links;
	}

	public function newStatements() {
		$statements = new StatementList();

		$statements->addNewStatement(
			new PropertyValueSnak(
				$this->country->newPropertyId(),
				new EntityIdValue( $this->germany->newItemId() )
			),
			null,
			null,
			'first guid'
		);

		$statements->addNewStatement(
			new PropertyValueSnak(
				$this->instanceOf->newPropertyId(),
				new EntityIdValue( $this->city->newItemId() )
			),
			null,
			null,
			'second guid'
		);

		$statements->addNewStatement(
			new PropertyValueSnak(
				$this->postCode->newPropertyId(),
				new StringValue( '10115–14199' )
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
			$this->germany->newItem(),
			$this->city->newItem()
		];
	}

	/**
	 * @return Property[]
	 */
	public function getPropertyDependencies() {
		return [
			$this->country->newProperty(),
			$this->instanceOf->newProperty()
		];
	}

}
