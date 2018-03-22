# PHP 7.3 is_countable polyfill
A trivial but working polyfill for PHP 7.3 is_countable function.

## Installation
You can use composer to install this polyfill:

`composer require ayesh/is_countable-polyfill`

## Tests
PHPUnit is used as the test framework. Some of the tested variables are
directly taken from the [commit](https://github.com/php/php-src/pull/3026/commits/587fcc504f8ad2b07ac28c3335cd0fe3ac39b503) that added `is_countable` to PHP source.

## FAQ (or questions I think someone would ask)
**Why use this library when I could simply copy-paste the snippet from the RFC?**

   ¯\\_(ツ)_/¯

**PHP 5.2 compatibility**
You can even use this simple compat for any PHP version that you'd ever
run into. For 5.2 or older versions, please just stop using polyfills
and just upgrade your PHP version.
