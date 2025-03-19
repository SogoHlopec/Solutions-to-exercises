<?php
/*
https://www.codewars.com/kata/5ae62fcf252e66d44d00008e
Expressions Matter

Description:
    Given three integers a, b, and c, return the largest number obtained after inserting the operators +, *, and parentheses (). In other words, try every combination of a, b, and c with the operators, without reordering the operands, and return the maximum value.

    Example
    With the numbers 1, 2, and 3, here are some possible expressions:

    1 * (2 + 3) = 5
    1 * 2 * 3 = 6
    1 + 2 * 3 = 7
    (1 + 2) * 3 = 9
    The maximum value that can be obtained is 9.

    Notes
    The numbers are always positive, in the range 1 ≤ a, b, c ≤ 10.
    You can use the same operation more than once.
    It is not necessary to use all the operators or parentheses.
    You cannot swap the operands. For example, with the given numbers, you cannot get the expression (1 + 3) * 2 = 8.
    Input and Output Examples
    expressionsMatter(1, 2, 3) ==> 9, because (1 + 2) * 3 = 9.
    expressionsMatter(1, 1, 1) ==> 3, because 1 + 1 + 1 = 3.
    expressionsMatter(9, 1, 1) ==> 18, because 9 * (1 + 1) = 18.

Tests:
        class MyTest extends TestCase {
    public function testFixedTests() {
        $this->assertSame(6, expressionMatter(2, 1, 2));
        $this->assertSame(4, expressionMatter(2, 1, 1));
        $this->assertSame(16, expressionMatter(2, 2, 4));
        $this->assertSame(27, expressionMatter(3, 3, 3));
        $this->assertSame(3, expressionMatter(1, 1, 1));
        $this->assertSame(9, expressionMatter(1, 2, 3));
        $this->assertSame(5, expressionMatter(1, 3, 1));
        $this->assertSame(8, expressionMatter(2, 2, 2));
        $this->assertSame(20, expressionMatter(5, 1, 3));
        $this->assertSame(105, expressionMatter(3, 5, 7));
        $this->assertSame(35, expressionMatter(5, 6, 1));
        $this->assertSame(8, expressionMatter(1, 6, 1));
        $this->assertSame(14, expressionMatter(2, 6, 1));
        $this->assertSame(48, expressionMatter(6, 7, 1));
        $this->assertSame(60, expressionMatter(2, 10, 3));
        $this->assertSame(27, expressionMatter(1, 8, 3));
        $this->assertSame(126, expressionMatter(9, 7, 2));
        $this->assertSame(20, expressionMatter(1, 1, 10));
        $this->assertSame(18, expressionMatter(9, 1, 1));
        $this->assertSame(300, expressionMatter(10, 5, 6));
        $this->assertSame(12, expressionMatter(1, 10, 1));
    }
    }
*/

function expressionMatter($a, $b, $c)
{
    $result = $a + $b + $c;
    $result = $result > $a * $b * $c ? $result : $a * $b * $c;
    // $result = $result > $a + $b * $c ? $result : $a + $b * $c; //superfluous
    // $result = $result > $a * $b + $c ? $result : $a * $b + $c; //superfluous
    $result = $result > ($a + $b) * $c ? $result : ($a + $b) * $c;
    $result = $result > $a * ($b + $c) ? $result : $a * ($b + $c);
    return $result;

    // better
    // return max(
    //     $a + $b + $c,
    //     ($a + $b) * $c,
    //     $a * ($b + $c),
    //     $a * $b * $c
    // );
}