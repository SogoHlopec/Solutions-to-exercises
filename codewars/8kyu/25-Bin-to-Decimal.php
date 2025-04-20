<?php
/*
https://www.codewars.com/kata/57a5c31ce298a7e6b7000334
Bin to Decimal

Description:
Complete the function which converts a binary number (given as a string) to a decimal number.

Tests:
    <?php
use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
    private function doTest(string $param, int $expected)
    {
        $this->assertSame(
            $expected, 
            binToDec($param), 
            "binToDec('{$param}') returned an incorrect answer."
        );
    }

    public function testSampleTests()
    {
        $this->doTest("1", 1);
        $this->doTest("0", 0);
        $this->doTest("1001001", 73);
    }

}
*/


function binToDec(string $bin): int
{
    return bindec($bin);
}
