<?php
/*
https://www.codewars.com/kata/55a5bfaa756cfede78000026/train/php
Super Duper Easy

Make a function that returns the value multiplied by 50 and increased by 6. If the value entered is a string it should return "Error".

Tests:
    // PHPUnit Test Examples:
    // TODO: Replace examples and use TDD development by writing your own tests
    class ProblemTest extends TestCase
    {
        // test function names should start with "test"
        public function testProblem() {
        $this->assertEquals("Error", problem("a"));
        $this->assertEquals(56, problem(1));
        $this->assertEquals(256, problem(5));
        $this->assertEquals(6, problem(0));
        $this->assertEquals(66, problem(1.2));
        $this->assertEquals(156, problem(3));
        $this->assertEquals("Error", problem("RyanIsCool"));
        $this->assertEquals(-144, problem(-3));
        }
    }
*/
function problem($x)
{
    if (is_string($x)) {
        return 'Error';
    }
    return ($x * 50) + 6;
}