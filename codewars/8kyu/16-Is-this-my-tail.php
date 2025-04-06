<?php
/*
https://www.codewars.com/kata/56f695399400f5d9ef000af5
Is this my tail?

Description:
Some new animals have arrived at the zoo. The zoo keeper is concerned that perhaps the animals do not have the right tails. To help her, you must correct the broken function to make sure that the second argument (tail), is the same as the last letter of the first argument (body) - otherwise the tail wouldn't fit!

If the tail is right return true, else return false.

The arguments will always be non empty strings, and normal letters.


Tests:
        class IsThisMyTailTest extends TestCase {
    public function testFixedTests() {
        $this->assertTrue(equivalent("batata", "a"));
        $this->assertFalse(equivalent("hello", "e"));
        $this->assertTrue(equivalent("curioso", "o"));
        $this->assertTrue(equivalent("passaroco", "o"));
        $this->assertFalse(equivalent("barfoo", "f"));
        $this->assertTrue(equivalent("urubu", "u"));
        $this->assertTrue(equivalent("saci", "i"));
        $this->assertFalse(equivalent("fail", "a"));
        $this->assertTrue(equivalent("elefante", "e"));
        $this->assertTrue(equivalent("milho", "o"));
        $this->assertFalse(equivalent("foobar", "o"));
        $this->assertTrue(equivalent("brasil", "l"));
    }
    }

*/

function equivalent($body, $char)
{
    return $body[-1] === $char;
}