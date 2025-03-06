<?php

/*
https://www.codewars.com/kata/57fae964d80daa229d000126/train/php
8 kyu Exclamation marks series #1: Remove an exclamation mark from the end of string

Task:
    Remove an exclamation mark from the end of a string. For a beginner kata, you can assume that the input data is always a string, no need to verify it.

    Examples
    "Hi!"     ---> "Hi"
    "Hi!!!"   ---> "Hi!!"
    "!Hi"     ---> "!Hi"
    "!Hi!"    ---> "!Hi"
    "Hi! Hi!" ---> "Hi! Hi"
    "Hi"      ---> "Hi"

Tests:
    class RemoveTest extends TestCase {
    public function testDescriptionExamples() {
        $this->assertSame("Hi", remove("Hi!"));
        $this->assertSame("Hi!!", remove("Hi!!!"));
        $this->assertSame("!Hi", remove("!Hi"));
        $this->assertSame("!Hi", remove("!Hi!"));
        $this->assertSame("Hi! Hi", remove("Hi! Hi!"));
        $this->assertSame("Hi", remove("Hi"));
    }
    }
*/

function remove(string $s): string
{

    $output = $s[-1] === '!' ? substr($s, 0, (strlen($s) - 1)) : $s;
    return $output;
}