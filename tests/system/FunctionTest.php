<?php

class FunctionTest extends \PHPUnit\Framework\TestCase
{
    public function test_result()
    {
        $this->assertTrue(true);
    }


    public function arrayDataProvider()
    {
        return [
            [
                [1, 3, 4, 5, 6],
                [3, 4, 5, 5],
                [1, 3, 4, 5, 6, 3, 4, 5, 5],
            ],
            [
                ['a'=>123, 'b'=>1234, 4, 5, 6],
                ['a'=>2344],
                ['a'=>2344,'b'=>1234,4,5,6],
            ],
        ];
    }

    /**
     * @dataProvider arrayDataProvider
     */
    public function test_array_merge_overwrite($a, $b, $c)
    {
        $result = array_merge_overwrite($a, $b);
        $this->assertEquals($c, $result);
    }
}