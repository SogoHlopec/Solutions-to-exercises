<?php
/*
https://www.codewars.com/kata/56b0ff16d4aa33e5bb00008e/train/php
8 kyu Remove the time

Task:
    You're re-designing a blog, and the blog's posts have the Weekday Month Day, time format for showing the date and time when a post was made, e.g., Friday May 2, 7pm.

    You're running out of screen real estate, and on some pages you want to display a shorter format, Weekday Month Day that omits the time.

    Write a function that takes the website date/time in its original string format and returns the shortened format.

Tests:
    class MyTest extends TestCase
    {
        public function testExample() {
            $this->assertSame("Friday May 2", shortenToDate("Friday May 2, 9am"));
            $this->assertSame("Tuesday January 29", shortenToDate("Tuesday January 29, 10pm"));
            $this->assertSame("Monday December 25", shortenToDate("Monday December 25, 10pm"));
        }
    }
*/

function shortenToDate($longDate)
{
    $output = explode(',',$longDate)[0];
    return $output;
}