<?php

namespace Tests\Wikibase\DataFixtures;

use Wikibase\DataFixtures\Items\Berlin;
use Wikibase\DataFixtures\Items\Germany;
use Wikibase\DataFixtures\Items\KnowledgeBase;
use Wikibase\DataFixtures\Items\OnlineDatabase;
use Wikibase\DataFixtures\Items\State;
use Wikibase\DataFixtures\Items\Wikidata;
use Wikibase\DataFixtures\Items\WikimediaProject;

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class ItemConstructionTest extends \PHPUnit_Framework_TestCase {

	public function testCanConstructItems() {
		$this->assertInstanceOf( 'Wikibase\DataModel\Entity\Item', ( new Berlin() )->newItem() );
		$this->assertInstanceOf( 'Wikibase\DataModel\Entity\Item', ( new Germany() )->newItem() );
		$this->assertInstanceOf( 'Wikibase\DataModel\Entity\Item', ( new State() )->newItem() );
		$this->assertInstanceOf( 'Wikibase\DataModel\Entity\Item', ( new Wikidata() )->newItem() );
		$this->assertInstanceOf( 'Wikibase\DataModel\Entity\Item', ( new WikimediaProject() )->newItem() );
		$this->assertInstanceOf( 'Wikibase\DataModel\Entity\Item', ( new KnowledgeBase() )->newItem() );
		$this->assertInstanceOf( 'Wikibase\DataModel\Entity\Item', ( new OnlineDatabase() )->newItem() );
	}

}
