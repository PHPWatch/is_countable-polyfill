<?php

function is_countable_generator() {
  for ($i = 0; $i < 10; $i++) {
    yield $i;
  }
}
