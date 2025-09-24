<?php
require_once __DIR__ . '/../vendor/autoload.php';

class ValidatorTest extends PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider datesProvider
     * @param string $date Datum
     * @param bool $expected očekávaný výsledek
     */
    public function testValidDate(string $date, bool $expected): void
    {
        $actual = ''; // doplň výstup z validátoru
        $this->assertEquals($expected, $actual);
    }

    public static function datesProvider(): array
    {
        return [
            [
                '11. 1. 2015',
                true,
            ],
            [
                '20. 20. 2015',
                false,
            ],
            // doplň podle potřeby
        ];
    }
}
