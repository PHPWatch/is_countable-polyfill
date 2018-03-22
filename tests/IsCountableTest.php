<?php

use PHPUnit_Framework_TestCase as TestCase;

class Ayesh_IsCountable_IsCountableTest extends TestCase {
  public function testIsCountableDeclared() {
    $this->assertTrue(function_exists('is_countable'));
  }

  /**
   * @dataProvider getIsCountableData
   *
   * @param $variable
   * @param $expected_return_value
   */
  public function testIsCountableReturnValues($variable, $expected_return_value) {
    $this->assertEquals(is_countable($variable), $expected_return_value);
  }

  public function getIsCountableData() {
    return array(
      array(true, false),
      array(new stdClass(), false),
      array(new ArrayIteratorFake(), true),
      array(new CountableFake(), true),
      array(16, false),
      array(null, false),
      array(array(1, 2, 3), true),
      array((array) 1, true),
      array((object) array('foo', 'bar', 'baz'), false),
    );
  }
}


class ArrayIteratorFake extends ArrayIterator {

}

class CountableFake implements Countable {
  public function count() {
    return 16;
  }
}
