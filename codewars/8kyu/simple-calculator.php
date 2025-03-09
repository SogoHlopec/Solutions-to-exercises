<?php
/*
https://www.codewars.com/kata/5810085c533d69f4980001cf
simple calculator

You are required to create a simple calculator that returns the result of addition, subtraction, multiplication or division of two numbers.

Your function will accept three arguments:
The first and second argument should be numbers.
The third argument should represent a sign indicating the operation to perform on these two numbers.

if the variables are not numbers or the sign does not belong to the list above a message "unknown value" must be returned.

Example:
calculator(1, 2, "+"); // 3
calculator(1, 2, "&"); // "unknown value"
calculator(1, "k", "*"); // "unknown value"
Good luck!

Tests:
    class CalculatorTest extends TestCase {
        public function testExamples() {
            $this->assertEquals(3, calculator(1, 2, "+"));
            $this->assertEquals(-1, calculator(1, 2, "-"));
            $this->assertEquals(15, calculator(3, 5, "*"));
            $this->assertEquals(3, calculator(6, 2, "/"));
            $this->assertEquals("unknown value", calculator(6, 2, "$"));
            $this->assertEquals("unknown value", calculator(6, "h", "*"));
        }
    }
*/

function calculator($a, $b, $sign)
{
    if (is_numeric($a) && is_numeric($b) && !is_string($a) && !is_string($b)) {
        $result = 0;
        switch ($sign) {
            case '+':
                $result = $a + $b;
                break;
            case '-':
                $result = $a - $b;
                break;
            case '*':
                $result = $a * $b;
                break;
            case '/':
                $result = $a / $b;
                break;

            default:
                return 'unknown value';
                break;
        }
        return $result;
    }
    return 'unknown value';
}
