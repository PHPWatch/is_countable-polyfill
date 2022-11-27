# PHP 7.3 is_countable polyfill
A trivial yet functional polyfill for PHP 7.3 `is_countable()` function.

**This polyfill is now archived and is marked as abandoned. PHP 7.3 is quite old, and it is highly recommended to simply upgrade to PHP 8 or later, which should leave no reason to use this polyfill. Thank you for using/considering this polyfill.**

## Installation
You can use composer to install this polyfill:

`composer require ayesh/is_countable-polyfill`

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

PHP 7.3 comes with an `is_countable` function that helps to mitigate such
warnings by checking if the variable is countable first. For those who
don't have PHP 7.3 yet, this polyfill will add the same functionality in
user-land code.

**Can I remove this package when I upgrade to PHP 7.3 or later?**

Yes. If you require PHP 7.3 or later as the minimum supported PHP version, you do not need to use this package. 
To remove it:

`composer remove ayesh/is_countable-polyfill`

