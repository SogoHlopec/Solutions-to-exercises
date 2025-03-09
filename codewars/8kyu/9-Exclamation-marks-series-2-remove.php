<?php
/*
https://www.codewars.com/kata/57faece99610ced690000165/train/php
Exclamation marks series #2: Remove all exclamation marks from the end of sentence

Remove all exclamation marks from the end of sentence.

Examples
"Hi!"     ---> "Hi"
"Hi!!!"   ---> "Hi"
"!Hi"     ---> "!Hi"
"!Hi!"    ---> "!Hi"
"Hi! Hi!" ---> "Hi! Hi"
"Hi"      ---> "Hi"

Tests:
    class RemoveTest extends TestCase {
    public function testDescriptionExamples() {
        $this->assertSame("Hi", remove("Hi!"));
        $this->assertSame("Hi", remove("Hi!!!"));
        $this->assertSame("!Hi", remove("!Hi"));
        $this->assertSame("!Hi", remove("!Hi!"));
        $this->assertSame("Hi! Hi", remove("Hi! Hi!"));
        $this->assertSame("Hi", remove("Hi"));
    }
    }
*/
function remove(string $s): string
{
    return preg_replace('/!*$/', '', $s);
}
