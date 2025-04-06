<?php

/*
https://www.codewars.com/kata/59ca8246d751df55cc00014c
Is he gonna survive?

Description:
A hero is on his way to the castle to complete his mission. However, he's been told that the castle is surrounded with a couple of powerful dragons! each dragon takes 2 bullets to be defeated, our hero has no idea how many bullets he should carry.. Assuming he's gonna grab a specific given number of bullets and move forward to fight another specific given number of dragons, will he survive?

Return true if yes, false otherwise :)

Tests:
        <?php use PHPUnit\Framework\TestCase;

    class MyTest extends TestCase
    {
        private function doTest(int $bullets, int $dragons, bool $expected)
        {
            $this->assertSame($expected, hero($bullets, $dragons), "hero($bullets, $dragons) returned an incorrect value.");
        }

        public function testStandardTestCases()
        {
            $this->doTest(10, 5, true);
            $this->doTest(7, 4, false);
            $this->doTest(4, 5, false);
            $this->doTest(100, 40, true);
            $this->doTest(1500, 751, false);
            $this->doTest(0, 1, false);
        }
    }
*/

function hero(int $bullets, int $dragons): bool{
    return $dragons * 2 <= $bullets;
}