<?php

/*
https://www.codewars.com/kata/582cb0224e56e068d800003c
Keep Hydrated!

Description:
    Nathan loves cycling.

    Because Nathan knows it is important to stay hydrated, he drinks 0.5 litres of water per hour of cycling.

    You get given the time in hours and you need to return the number of litres Nathan will drink, rounded down.

    For example:

    time = 3 ----> litres = 1

    time = 6.7---> litres = 3

    time = 11.8--> litres = 5

Tests:
        <?php
    use PHPUnit\Framework\TestCase;

    class KeepHydratedTest extends TestCase
    {
        private function doTest(float $time, int $expected)
        {
            $this->assertSame(
                $expected,
                litres($time),
                "litres($time) returned an incorrect answer."
            );
        }

        public function testSample()
        {
            $this->doTest(2, 1);
            $this->doTest(1.4, 0);
            $this->doTest(12.3, 6);
            $this->doTest(0.82, 0);
            $this->doTest(11.8, 5);
            $this->doTest(1787, 893);
            $this->doTest(0, 0);
        }
    }

*/

function litres(float $t): int {
    return floor($t / 2);
    // better
    // return intdiv($t, 2);
    // return floor($t * 0.5);
}

