<?php
require 'data_types.php';

class DataTypesTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider boolTestData
     */
    public function testConvertToBool($value, $expected)
    {
        $this->assertSame($expected, convert_to_bool($value));
    }

    public function boolTestData()
    {
        return [
            [0, false],
            [0.0, false],
            ['', false],
            ['0', false],
            [[], false],
            [null, false],
            [false, false],
            [1, true],
            [-1, true],
            ['false', true],
            [0.1, true],
            [53, true],
            ['true', true],
            [[2, 3], true],
            [true, true]
        ];
    }

    /**
     * @dataProvider intTestData
     */
    public function testConvertToInt($value, $expected)
    {
        $this->assertSame($expected, convert_to_int($value));
    }

    public function intTestData()
    {
        return [
            [1, 1],
            [53, 53],
            ['7', 7],
            ['3times', 3],
            [0.3, 0],
            [3.6, 3],
            ['nope', 0],
            ['', 0],
            [[], 0],
            [[2, 3], 1]
        ];
    }

    /**
     * @dataProvider floatTestData
     */
    public function testConvertToFloat($value, $expected)
    {
        $this->assertSame($expected, convert_to_float($value));
    }

    public function floatTestData()
    {
        return [
            [1, 1.0],
            ['1', 1.0],
            ['7.2', 7.2],
            ['3times', 3.0],
            ['nope', 0.0],
            ['', 0.0],
            [[], 0.0],
            [[2, 3], 1.0]
        ];
    }

    /**
     * @dataProvider stringTestData
     */
    public function testConvertToString($value, $expected)
    {
        $this->assertSame($expected, convert_to_string($value));
    }

    public function stringTestData()
    {
        return [
            [1, '1'],
            [5.3, '5.3'],
            ['string', 'string'],
            ['3times', '3times'],
            ['', ''],
            [[], ''],
            [[2, 3], '2, 3'],
            ['null', 'null'],
            [null, '']
        ];
    }

    /**
     * @dataProvider arrayTestData
     */
    public function testConvertToArray($value, $expected)
    {
        $this->assertSame($expected, convert_to_array($value));
    }

    public function arrayTestData()
    {
        return [
            [null, []],
            [0, [0]],
            ['7', ['7']],
            ['value', ['value']],
            [5.2, [5.2]],
            ['', ['']],
            [[], []],
            [[2, 3], [2, 3]]
        ];
    }

    /**
     * @dataProvider nullTestData
     */
    public function testConvertToNull($value, $expected)
    {
        $this->assertSame($expected, convert_to_null($value));
    }

    public function nullTestData()
    {
        return [
            [null, null],
            ['', null],
            ['0', null],
            [0.0, null],
            [false, null],
            ['null', null],
            [1, 1],
            [true, true],
            [[2, 3], [2, 3]],
            [0.3, 0.3],
            ['value', 'value']
        ];
    }
}