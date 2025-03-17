<?php
/*
https://www.codewars.com/kata/569e09850a8e371ab200000b
Pre-FizzBuzz Workout #1 (retired)

Description:
    This is the first step to understanding FizzBuzz.

    Your inputs: a positive integer, n, greater than or equal to one. n is provided, you have NO CONTROL over its value.

    Your expected output is an array of positive integers from 1 to n (inclusive).

    Your job is to write an algorithm that gets you from the input to the output.

Tests:
        class PreFizzTest extends TestCase {
    public function testExamples() {
        $this->assertSame([1], pre_fizz(1));
        $this->assertSame([1, 2], pre_fizz(2));
        $this->assertSame([1, 2, 3], pre_fizz(3));
        $this->assertSame([1, 2, 3, 4], pre_fizz(4));
        $this->assertSame([1, 2, 3, 4, 5], pre_fizz(5));
    }
    }
*/
function pre_fizz($n)
{
    $result = [];
    for ($i = 1; $i <= $n; $i++) {
        array_push($result, $i);
    }
    return $result;
    // beter return range(1, $n);
}