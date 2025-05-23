<?php
/*
https://www.codewars.com/kata/57089707fe2d01529f00024a
Grasshopper - If/else syntax debug

Description:
If/else syntax debug
While making a game, your partner, Greg, decided to create a function to check if the user is still alive called checkAlive/CheckAlive/check_alive. Unfortunately, Greg made some errors while creating the function.

checkAlive/CheckAlive/check_alive should return true if the player's health is greater than 0 or false if it is 0 or below.

The function receives one parameter health which will always be a whole number between -10 and 10.



Tests:
        class CheckAliveTest extends TestCase
    {
        public function testShouldReturnTheProperValues() {
            $this->assertSame(true, checkAlive(5));
            $this->assertSame(false, checkAlive(0));
        }
    }
*/

function checkAlive($health)
{
    if ($health > 0) {
        return true;
    } else {
        return false;
    }
}
