<?php
require_once __DIR__  . '/../vendor/autoload.php';
class ValidatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider datesProvider
     * @param string $date Datum
     * @param bool $expected očekávaný výsledek
     */
    public function testValidDate($date, $expected)
    {
        $actual = ''; // doplň výstup z validátoru
        $this->assertEquals($expected, $actual);
    }

    public function datesProvider()
    {
        return array(
            array(
                '11. 1. 2015',
                true,
            ),
            array(
                '20. 20. 2015',
                false,
            ),
            // doplň podle potřeby
        );
    }
}
