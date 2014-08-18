<?php

namespace Wikibase\DataFixtures\Items;

use Wikibase\DataFixtures\Properties\CountryProperty;
use Wikibase\DataFixtures\Properties\InstanceOfProperty;
use Wikibase\DataModel\Claim\ClaimList;
use Wikibase\DataModel\Claim\Claims;
use Wikibase\DataModel\Entity\EntityIdValue;
use Wikibase\DataModel\Entity\Item;
use Wikibase\DataModel\Entity\Property;
use Wikibase\DataModel\Snak\PropertyValueSnak;
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

	public function __construct() {
		$this->germany = new Germany();
		$this->country = new CountryProperty();
		$this->city = new City();
		$this->instanceOf = new InstanceOfProperty();
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

	public function newItem() {
		$item = Item::newEmpty();
		$item->setId( 64 );

		$item->setFingerprint( $this->newFingerprint() );
		$item->setClaims( new Claims( iterator_to_array( $this->newStatements() ) ) );

		return $item;
	}

	public function newStatements() {
		$statements = new ClaimList();

		$statements->addNewClaim(
			new PropertyValueSnak(
				$this->country->newPropertyId(),
				new EntityIdValue( $this->germany->newItemId() )
			),
			null,
			'kittens'
		);

		$statements->addNewClaim(
			new PropertyValueSnak(
				$this->instanceOf->newPropertyId(),
				new EntityIdValue( $this->city->newItemId() )
			),
			null,
			'kittens'
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
