<?php
/*
https://www.codewars.com/kata/59342039eb450e39970000a6/train/php
Count Odd Numbers below n

Given a number n, return the number of positive odd numbers below n, EASY!

Examples (Input -> Output)
7  -> 3 (because odd numbers below 7 are [1, 3, 5])
15 -> 7 (because odd numbers below 15 are [1, 3, 5, 7, 9, 11, 13])
Expect large Inputs!

Tests:
    class CountOddSampleTest extends TestCase
    {
        public function testOddCount() {
        $this->assertSame(7, oddCount(15), "For \$n = 15");
        $this->assertSame(7511, oddCount(15023), "For \$n = 15023");
        }
    }
*/

function oddCount($n): int
{
    return intdiv($n, 2);
}