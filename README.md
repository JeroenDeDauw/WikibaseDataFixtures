# Wikibase DataFixtures

[![Build Status](https://secure.travis-ci.org/JeroenDeDauw/WikibaseDataFixtures.png?branch=master)](http://travis-ci.org/JeroenDeDauw/WikibaseDataFixtures)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/JeroenDeDauw/WikibaseDataFixtures/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/JeroenDeDauw/WikibaseDataFixtures/?branch=master)
[![Dependency Status](https://www.versioneye.com/php/jeroen:wikibase-data-fixtures/badge.png)](https://www.versioneye.com/php/jeroen:wikibase-data-fixtures)
[![Download count](https://poser.pugx.org/jeroen/wikibase-data-fixtures/d/total.png)](https://packagist.org/packages/jeroen/wikibase-data-fixtures)
[![License](https://poser.pugx.org/jeroen/wikibase-data-fixtures/license.svg)](https://packagist.org/packages/jeroen/wikibase-data-fixtures)

[![Latest Stable Version](https://poser.pugx.org/jeroen/wikibase-data-fixtures/version.png)](https://packagist.org/packages/jeroen/wikibase-data-fixtures)
[![Latest Unstable Version](https://poser.pugx.org/jeroen/wikibase-data-fixtures/v/unstable.svg)](//packagist.org/packages/jeroen/wikibase-data-fixtures)

**Wikibase DataFixtures** contains Wikibase data meant for use in tests and examples.

## Installation

You can use [Composer](http://getcomposer.org/) to download and install
this package as well as its dependencies. Alternatively you can simply clone
the git repository and take care of loading yourself.

To add this package as a local, per-project dependency to your project, simply add a
dependency on `jeroen/wikibase-data-fixtures` to your project's `composer.json` file.
Here is a minimal example of a `composer.json` file that just defines a dependency on
Wikibase DataFixtures 1.0:

```js
{
    "require": {
        "jeroen/wikibase-data-fixtures": "~1.0"
    }
}
```

## Compatibility

PHP 5.4 and above are supported.

Generally existing data will not be modified. If it is, the release notes will definitely mention
it, and the version number will be incremented appropriately. Changes to this library will come
mainly in the form of additions, not as changes or removals. If an `Item` has a particular
`Statement`, it will keep having it, even though additional statements might be added.

## Running the tests

Running the tests

    phpunit

## Release notes

### Version 0.2 (2014-08-19)

* Renamed `Country` to `CountryProperty`
* Added `InstanceOfProperty`, `City` and `State`

### Version 0.1 (2014-08-17)

* Initial release
