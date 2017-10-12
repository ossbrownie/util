Util
====

A collection of general utilities for simplifying common tasks that are solved by various Brownie packages.

## Requirements
- **PHP** >= 5.3

## Installation
Add a line to your "require" section in your composer configuration:

```json
{
    "require": {
        "ossbrownie/util": "0.0.1"
    }
}
```

## Documentation
- [ArrayStorage](https://github.com/ossbrownie/util/wiki/ArrayStorage) - Data storage in the form of an associative array. 


###Tests
To run the test suite, you need install the dependencies via composer, then run PHPUnit.
```bash
$> composer.phar install
$> ./vendor/bin/phpunit --colors=always --bootstrap ./tests/bootstrap.php ./tests
```


## License
Util is licensed under the [GNU General Public License v3.0](http://www.gnu.org/copyleft/lesser.html)


## Contact

Problems, comments, and suggestions all welcome: [oss.brownie@gmail.com](mailto:oss.brownie@gmail.com)
