<?php

/*
https://www.codewars.com/kata/55f73be6e12baaa5900000d4
Grasshopper - Messi goals function

Description:
    Messi goals function
    Messi is a soccer player with goals in three leagues:

    LaLiga
    Copa del Rey
    Champions
    Complete the function to return his total number of goals in all three leagues.

    Note: the input will always be valid.

    For example:

    5, 10, 2  -->  17

Tests:
        <?php use PHPUnit\Framework\TestCase;

    class ExampleTest extends TestCase
    {
    
        private function doTest(int $la, int $co, int $ch, int $expected) {
        $this->assertSame($expected, goals($la, $co, $ch), "goals($la, $co, $ch) returned an incorrect answer.");
        }
    
        public function testSample() {
        $this->doTest(0, 0, 0, 0);
        $this->doTest(43, 10, 5, 58);
        }
    }
*/

function goals (int $laLigaGoals, int $copaDelReyGoals, int $championsLeagueGoals) : int {
    return $laLigaGoals + $copaDelReyGoals + $championsLeagueGoals;
}

//better
// function goals(int ...$args): int
// {
//     return array_sum($args);
// }