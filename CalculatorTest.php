<?php
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {
    public function testAddition() {
        $calculator = new Calculator();

        // Test if the addition method works correctly
        $result1 = $calculator->add(1, 2);
        $result2 = $calculator->add(3, 4);
        $result3 = $calculator->add(5, 6);

        $this->assertEquals(3, $result1);
        $this->assertEquals(7, $result2);
        $this->assertEquals(11, $result3); // test this after changing this to 1 like
    }
}
