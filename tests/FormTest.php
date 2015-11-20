<?php
require_once __DIR__  . '/../vendor/autoload.php';
class FormTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider formData
     * @param array $data
     * @param bool $valid
     */
    public function testFormValidity($data, $valid)
    {
        $form = new PersonForm();
        $this->assertEquals($valid, $form->isValid($data));
    }

    public function formData()
    {
        return [
            [
                [
                    'age' => '4X',
                    'email' => 'nic vám nedám',
                    'phone' => '777 123 456',
                ],
                false,
            ],
            [
                [
                    'age' => '40',
                    'email' => 'tomas.fejfar@w3w.cz',
                    'phone' => '+420111222333',
                ],
                true,
            ],
            [
                [
                    'age' => '40',
                    'email' => 'tomas.fejfar@w3w.cz',
                    'phone' => '+42011122233',
                ],
                false,
            ],
            [
                [
                    'age' => '4',
                    'email' => 'tomas.fejfar@w3w.cz',
                    'phone' => '723010556',
                ],
                true,
            ],
            [
                [
                    'age' => '4',
                    'email' => 'tomas.fejfar@w3w',
                    'phone' => '723010556',
                ],
                false,
            ],
        ];
    }
}
