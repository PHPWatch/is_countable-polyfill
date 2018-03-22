<?php

use PHPUnit\Framework\TestCase;

class Ayesh_IsCountable_IsCountableTest extends TestCase {
  public function testIsCountableDeclared() {
    $this->assertTrue(function_exists('is_countable'));
  }

  /**
   * @dataProvider getIsCountableData
   */
  public function testIsCountableReturnValues($variable, $expected_return_value) {
    $this->assertEquals(is_countable($variable), $expected_return_value);
  }

  public function getIsCountableData() {
    return [
      [true, false],
      [new stdClass(), false],
      [new ArrayIteratorFake(), true],
      [new CountableFake(), true],
      [16, false],
      [null, false],
      [[1, 2, 3], true],
      [(array) 1, true],
      [(object) ['foo', 'bar', 'baz'], false],
    ];
  }
}


class ArrayIteratorFake extends ArrayIterator {

}

class CountableFake implements Countable {
  public function count() {
    return 16;
  }
}
