<?php
/* 
https://www.codewars.com/kata/578a8a01e9fd1549e50001f1/train/php?collection=php-beginner
8 kyu Is your period late?

Task:
    In this kata, we will make a function to test whether a period is late.

    Our function will take three parameters:

    last - The Date object with the date of the last period

    today - The Date object with the date of the check

    cycleLength - Integer representing the length of the cycle in days

    Return true if the number of days passed from last to today is greater than cycleLength. Otherwise, return false.

Tests:
    class MyTest extends TestCase
    {
        public function testExample() {
            $this->assertSame(false, periodIsLate(new DateTime('2016-07-13'), new DateTime('2016-08-16'), 35));
            $this->assertSame(true, periodIsLate(new DateTime('2016-07-13'), new DateTime('2016-08-16'), 28));
        }
    }

*/

function periodIsLate($last, $today, $cycleLength)
{
    $interval = $last->diff($today);
    $days = $interval->days;
    if ($days > $cycleLength) {
        return true;
    }
    return false;
}