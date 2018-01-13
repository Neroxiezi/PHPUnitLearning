<?php

use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: nancheng
 * Date: 18/1/13
 * Time: 下午3:41
 */
class DataTestForName extends TestCase
{
    /**
     * @dataProvider additionProvider
     * @param $a
     * @param $b
     * @param $expected
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        return [
            'adding zeros' => [0, 0, 0],
            'zero plus one' => [0, 1, 1],
            'one plus zero' => [1, 0, 1],
            'one plus one' => [1, 1, 2]
        ];
    }
}