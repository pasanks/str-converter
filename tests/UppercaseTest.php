<?php

namespace Pasanks\StrConverter;

use PHPUnit\Framework\TestCase;

class UppercaseTest extends TestCase
{
    public function testConvertCharactersToUppercase()
    {
        $value = 'hello world';

        $value = (new Uppercase())->handle($value);

        $this->assertEquals('HELLO WORLD', $value);
    }
}
