# PHP 7.3 is_countable polyfill
A trivial but working polyfill for PHP 7.3 is_countable function.

## Installation
You can use composer to install this polyfill:

`composer require ayesh/is_countable-polyfill`

This will install the polyfill with all the contents, including tests. If
you would like to install without these files while keeping only the core
polyfill, you can use:

`composer require ayesh/is_countable-polyfill --prefer-dist`

## Tests
PHPUnit is used as the test framework. Some of the tested variables are
directly taken from the [commit](https://github.com/php/php-src/pull/3026/commits/587fcc504f8ad2b07ac28c3335cd0fe3ac39b503) that added `is_countable` to PHP source.

## FAQ (or questions I think someone would ask)
**Why use this library when I could simply copy-paste the snippet from the RFC?**

   ¯\\\_(ツ)_/¯

**PHP 5.2 compatibility**

You can even use this simple compat for any PHP version that you'd ever
run into. For 5.2 or older versions, please just stop using polyfills
and just upgrade your PHP version.

**I get `Warning: count(): Parameter must be an array or an object that implements Countable in %s on line %d` error**

This is because you called `count()` function on a variable that cannot be
counted. If you want to check if a given variable is "positive", you should
be using `empty()` contruct instead of `count()`.

PHP 7.3 comes with an `is_iterable` function that helps to mitigate such
warnings by checking if the variable is countable first. For those who
don't have PHP 7.3 yet, this polyfill will add the same functionality in
user-land code.
