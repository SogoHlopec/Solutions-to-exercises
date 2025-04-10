<?php

/*
https://www.codewars.com/kata/53369039d7ab3ac506000467
onvert boolean values to strings 'Yes' or 'No'.

Description:
Complete the method that takes a boolean value and return a "Yes" string for true, or a "No" string for false.

Tests:
        <?php use PHPUnit\Framework\TestCase;

    class MyTest extends TestCase
    {
    
        public function testTrueShouldReturnYes() {
            $this->assertSame("Yes", boolToWord(true), "boolToWord(true) returned an incorrect answer.");
        }

        public function testFalseShouldReturnNo() {
            $this->assertSame("No", boolToWord(false), "boolToWord(false) returned an incorrect answer.");
        }
    }

*/

function boolToWord(bool $bool): string{
    return $bool ? 'Yes' : 'No';
}