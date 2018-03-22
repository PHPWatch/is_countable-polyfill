<?php

if (function_exists('is_countable')) {
  return;
}

/**
 * Verify that the content of a variable is an array or an object
 * implementing Countable
 *
 * @param mixed $var The value to check.
 * @return bool Returns TRUE if var is countable, FALSE otherwise.
 */
function is_countable( $var ) {
  return (is_array($var) || $var instanceof Countable);
}
