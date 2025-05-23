<?php
/*
https://www.codewars.com/kata/5bb904724c47249b10000131
Total amount of points

Description:
Our football team has finished the championship.

Our team's match results are recorded in a collection of strings. Each match is represented by a string in the format "x:y", where x is our team's score and y is our opponents score.

For example: ["3:1", "2:2", "0:1", ...]

Points are awarded for each match as follows:

if x > y: 3 points (win)
if x < y: 0 points (loss)
if x = y: 1 point (tie)
We need to write a function that takes this collection and returns the number of points our team (x) got in the championship by the rules given above.

Notes:

our team always plays 10 matches in the championship
0 <= x <= 4
0 <= y <= 4

Tests:
        class MyBasicCases extends TestCase
    {
    public function testBasic() {
        $this->assertSame(30, points(['1:0','2:0','3:0','4:0','2:1','3:1','4:1','3:2','4:2','4:3']));
        $this->assertSame(10, points(['1:1','2:2','3:3','4:4','2:2','3:3','4:4','3:3','4:4','4:4']));
        $this->assertSame(0,  points(['0:1','0:2','0:3','0:4','1:2','1:3','1:4','2:3','2:4','3:4']));
        $this->assertSame(15, points(['1:0','2:0','3:0','4:0','2:1','1:3','1:4','2:3','2:4','3:4']));
        $this->assertSame(12, points(['1:0','2:0','3:0','4:4','2:2','3:3','1:4','2:3','2:4','3:4']));
    }
    }
*/
function points(array $games): int
{
    $result = 0;
    foreach ($games as $index => $value) {
        $values = explode(':', $value);
        $x = (int) $values[0];
        $y = (int) $values[1];

        $result += ($x > $y ? 3 : ($x === $y ? 1 : 0));
    }

    return $result;
}