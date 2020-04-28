<?php
/**
 * Test one.php
 *
 * @package one
 */

use One\Foo;
use PHPUnit\Framework\TestCase;

class TestOne extends TestCase {
    public function test_a_1() {
        $this->assertTrue( Foo::a(1) );
    }
}
