<?php

namespace Pasanks\StrConverter;

use Illuminate\Support\Arr;
use PHPUnit\Framework\TestCase;

class TabulateTest extends TestCase
{
    public function testWriteCharactersToCSVFile()
    {
        $value = 'hello world';

        (new Tabulate())->handle($value);

        $this->assertTrue(
            file_exists($csvFile = __DIR__ . '/../output.csv')
        );

        $content = fopen($csvFile, 'r');

        $data = [];

        if ($content !== false) {
            while (! feof($content)) {
                $data[] = fgetcsv($content, 1000, ',');
            }
        }

        fclose($content);

        $this->assertEqualsCanonicalizing(str_split($value), Arr::first($data));
    }
}
