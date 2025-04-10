<?php

/*
https://www.codewars.com/kata/56cd44e1aa4ac7879200010b
Is the string uppercase?

Description:
    Is the string uppercase?
    Task
    Create a method to see whether the string is ALL CAPS.

    Examples (input -> output)
    "c" -> False
    "C" -> True
    "hello I AM DONALD" -> False
    "HELLO I AM DONALD" -> True
    "ACSKLDFJSgSKLDFJSKLDFJ" -> False
    "ACSKLDFJSGSKLDFJSKLDFJ" -> True
    In this Kata, a string is said to be in ALL CAPS whenever it does not contain any lowercase letter so any string containing no letters at all is trivially considered to be in ALL CAPS.

Tests:
    class MyTest extends TestCase {
    public function testFixedTests() {
        $this->assertSame(false, is_uppercase('c'));
        $this->assertSame(true, is_uppercase('C'));
        $this->assertSame(false, is_uppercase('hello I AM DONALD'));
        $this->assertSame(true, is_uppercase('HELLO I AM DONALD'));
        $this->assertSame(false, is_uppercase('ACSKLDFJSgSKLDFJSKLDFJ'));
        $this->assertSame(true, is_uppercase('ACSKLDFJSGSKLDFJSKLDFJ'));
        $this->assertSame(false, is_uppercase('Hello World'));
        $this->assertSame(false, is_uppercase('hello world'));
        $this->assertSame(false, is_uppercase('Hello world'));
        $this->assertSame(false, is_uppercase('hello World'));
        $this->assertSame(true, is_uppercase('HELLO WORLD'));
        $this->assertSame(false, is_uppercase('Bob walks his dog every day.'));
        $this->assertSame(false, is_uppercase('BOB walks his dog every day.'));
        $this->assertSame(true, is_uppercase('BOB WALKS HIS DOG EVERY DAY.'));
        $this->assertSame(false, is_uppercase('BOB WALKs HIS DOG EVERY DAY.'));
        $this->assertSame(false, is_uppercase('#lovewins'));
        $this->assertSame(false, is_uppercase('#Lovewins'));
        $this->assertSame(false, is_uppercase('#loveWins'));
        $this->assertSame(false, is_uppercase('#LoveWins'));
        $this->assertSame(false, is_uppercase('#LOVEWins'));
        $this->assertSame(false, is_uppercase('#LoveWINS'));
        $this->assertSame(false, is_uppercase('#LOVEWINs'));
        $this->assertSame(false, is_uppercase('#lOVEWINS'));
        $this->assertSame(true, is_uppercase('#LOVEWINS'));
    }
    }

*/

function is_uppercase(string $str): bool
{
    return strtoupper($str) === $str;
}