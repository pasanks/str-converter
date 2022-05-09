<?php

namespace Pasanks\StrConverter;

use PHPUnit\Framework\TestCase;

class AlternateTest extends TestCase
{
    public function testAlternateCharacterManipulation()
    {
        $value = 'hello world';

        $value = (new Alternate())->handle($value);

        $checks = [];

        foreach (str_split($value) as $character) {
            $checks[] = ctype_upper($character);
        }

        $this->assertTrue(in_array(true, $checks, true));
    }
}
