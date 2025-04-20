<?php
/*
https://www.codewars.com/kata/57f6ad55cca6e045d2000627
To square(root) or not to square(root)

Description:
Write a method, that will get an integer array as parameter and will process every number from this array.

Return a new array with processing every number of the input-array like this:

If the number has an integer square root, take this, otherwise square the number.

Example
[4,3,9,7,2,1] -> [2,9,3,49,4,1]
Notes
The input array will always contain only positive numbers, and will never be empty or null.

Tests:
    use PHPUnit\Framework\TestCase;

    class FinalTest extends TestCase
    {
        private function doTest(array $expected, array $input)
        {
            $this->assertSame($expected, squareOrSquareRoot($input), "squareOrSquareRoot(" . json_encode($input) . ") returned an incorrect answer.");
        }
    
        public function testBasicTests()
        {
            $this->doTest([2, 9, 3, 49, 4, 1], [4, 3, 9, 7, 2, 1]);
            $this->doTest([10, 10201, 25, 25, 1, 1], [100, 101, 5, 5, 1, 1]);
            $this->doTest([1, 4, 9, 2, 25, 36], [1, 2, 3, 4, 5, 6]);
        }
    }  
*/


function squareOrSquareRoot(array $array): array
{
    $output = [];
    foreach ($array as $value) {
        if (sqrt($value) - floor(sqrt($value)) > 0) {
            array_push($output, $value ** 2);
        } else {
            array_push($output, (int) sqrt($value));
        }
    }
    return $output;
}
