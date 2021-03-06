Util
====

[![Latest Stable Version](https://poser.pugx.org/ossbrownie/util/v/stable)](https://packagist.org/packages/ossbrownie/util)
[![Total Downloads](https://poser.pugx.org/ossbrownie/util/downloads)](https://packagist.org/packages/ossbrownie/util)
[![Latest Unstable Version](https://poser.pugx.org/ossbrownie/util/v/unstable)](https://packagist.org/packages/ossbrownie/util)
[![License](https://poser.pugx.org/ossbrownie/util/license)](https://packagist.org/packages/ossbrownie/util)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ossbrownie/util/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ossbrownie/util/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/ossbrownie/util/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/ossbrownie/util/?branch=master)
[![Build Status](https://travis-ci.org/ossbrownie/util.svg?branch=master)](https://travis-ci.org/ossbrownie/util)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/ossbrownie/util/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)

A collection of general utilities for simplifying common tasks that are solved by various Brownie packages.

## Requirements
- **PHP** >= 5.3


## Installation
Add a line to your "require" section in your composer configuration:

```json
{
    "require": {
        "ossbrownie/util": "0.0.5"
    }
}
```


## Documentation
- [StorageArray](https://github.com/ossbrownie/util/wiki/StorageArray) - Data storage in the form of an associative array.
- [StorageList](https://github.com/ossbrownie/util/wiki/StorageList) - Storage of data in the form of a list.
- [Registry](https://github.com/ossbrownie/util/wiki/Registry) - Storage of data in the registry with the ability to write and read data.


## Tests
To run the test suite, you need install the dependencies via composer, then run PHPUnit.
```bash
$> composer.phar install
$> ./vendor/bin/phpunit --colors=always --bootstrap ./tests/bootstrap.php ./tests
```


## License
Util is licensed under the [MIT License](https://opensource.org/licenses/MIT)


## Contact
Problems, comments, and suggestions all welcome: [oss.brownie@gmail.com](mailto:oss.brownie@gmail.com)
