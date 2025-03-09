<?php
/*
https://www.codewars.com/kata/5748838ce2fab90b86001b1a/train/php
Area of a Square

Task:
    Complete the function that calculates the area of the red square, when the length of the circular arc A is given as the input. Return the result rounded to two decimals.

    Graph

    Note: use the π value provided in your language (Math::PI, M_PI, math.pi, etc)

Tests:
    class AreaOfASquareTest extends TestCase {
    public function testFixed() {
        $this->assertSame(0.00, square_area(0));
        $this->assertSame(1.62, square_area(2));
        $this->assertSame(80.00, square_area(14.05));
    }
    }
    
*/

function square_area($A): float
{
    $circleLength = $A * 4;
    $radius = $circleLength / (2 * pi());
    $area = round(pow($radius, 2), 2);
    return $area;
}