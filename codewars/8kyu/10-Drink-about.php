<?php
/*
https://www.codewars.com/kata/56170e844da7c6f647000063
Drink about

Description:
    Kids drink toddy.
    Teens drink coke.
    Young adults drink beer.
    Adults drink whisky.
    Make a function that receive age, and return what they drink.

    Rules:

    Children under 14 old.
    Teens under 18 old.
    Young under 21 old.
    Adults have 21 or more.
    Examples: (Input --> Output)

    13 --> "drink toddy"
    17 --> "drink coke"
    18 --> "drink beer"
    20 --> "drink beer"
    30 --> "drink whisky"

Tests:
        class PeopleWithAgeDrinkTest extends TestCase {
    public function testDescriptionExamples() {
        $this->assertSame('drink toddy', people_with_age_drink(13));
        $this->assertSame('drink coke', people_with_age_drink(17));
        $this->assertSame('drink beer', people_with_age_drink(18));
        $this->assertSame('drink beer', people_with_age_drink(20));
        $this->assertSame('drink whisky', people_with_age_drink(21));
    }
    }

*/

function people_with_age_drink(int $old): string
{
    switch ($old) {
        case 0:
            return 'drink toddy';
            break;
        case $old < 14:
            return 'drink toddy';
            break;
        case $old < 18:
            return 'drink coke';
            break;
        case $old < 21:
            return 'drink beer';
            break;
        default:
            return 'drink whisky';
            break;
    }
    // beter use match
}