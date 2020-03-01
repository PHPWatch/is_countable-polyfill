<?php

use PHPUnit\Framework\TestCase;

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
    $this->assertSame($expected_return_value, is_countable($variable));
  }

  /**
   * @requires PHP 5.5
   */
  public function testIsCountableGenerator() {
    require_once __DIR__ . '/generator_stub.php';
    $this->assertFalse(is_countable(is_countable_generator()));
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
      array(new \SimpleXMLElement('<xml><tag>1</tag><tag>2</tag></xml>'), true),
      array(\ResourceBundle::create('en', __DIR__ . '/fixtures'), true),
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

