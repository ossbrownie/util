Util
====

[![Latest Stable Version](https://poser.pugx.org/ossbrownie/util/v/stable)](https://packagist.org/packages/ossbrownie/util)
[![Total Downloads](https://poser.pugx.org/ossbrownie/util/downloads)](https://packagist.org/packages/ossbrownie/util)
[![Latest Unstable Version](https://poser.pugx.org/ossbrownie/util/v/unstable)](https://packagist.org/packages/ossbrownie/util)
[![License](https://poser.pugx.org/ossbrownie/util/license)](https://packagist.org/packages/ossbrownie/util)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/ossbrownie/util/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/ossbrownie/util/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/ossbrownie/util/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/ossbrownie/util/?branch=master)
[![Build Status](https://travis-ci.org/ossbrownie/util.svg?branch=master)](https://travis-ci.org/ossbrownie/util)

A collection of general utilities for simplifying common tasks that are solved by various Brownie packages.

## Requirements
- **PHP** >= 5.3


## Installation
Add a line to your "require" section in your composer configuration:

```json
{
    "require": {
        "ossbrownie/util": "0.0.3"
    }
}
```


## Documentation
- [StorageArray](https://github.com/ossbrownie/util/wiki/StorageArray) - Data storage in the form of an associative array.
- [StorageList](https://github.com/ossbrownie/util/wiki/StorageList) - Storage of data in the form of a list.


## Tests
To run the test suite, you need install the dependencies via composer, then run PHPUnit.
```bash
$> composer.phar install
$> ./vendor/bin/phpunit --colors=always --bootstrap ./tests/bootstrap.php ./tests
```


## License
Util is licensed under the [GNU General Public License v3.0](http://www.gnu.org/copyleft/lesser.html)


## Contact
Problems, comments, and suggestions all welcome: [oss.brownie@gmail.com](mailto:oss.brownie@gmail.com)
