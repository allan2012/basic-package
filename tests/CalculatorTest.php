<?php

use PHPUnit\Framework\TestCase;
use Calc\Calculator;

Class CalculatorTest extends TestCase {
 
    public function testReturnsTheCorrectSum()
    {
        $calculator = new Calculator();
        $result = $calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testReturnsTheCorrectGreater()
    {
        $calculator = new Calculator();
        $result = $calculator->greater(1, 2);
        $this->assertEquals(2, $result);
    }



}