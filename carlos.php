<?php

class HelloWorldTest extends WP_UnitTestCase {}
 class HelloWorldTest extends WP_UnitTestCase {
  function test_hello_world() {
    // Test hello_world()
  }
function test_hello_world() {
  $this->assertEquals("Hello World!" == hello_world());
}

