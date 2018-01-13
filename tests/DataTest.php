<?php

use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: nancheng
 * Date: 18/1/13
 * Time: 下午3:35
 */
class DataTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     * @param $a
     * @param $b
     * @param $expected
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b); //测试前两个元素相加的结果是否等于后面的结果
    }

    public function additionProvider()
    {
        return [
            [0,0,0],
            [0,1,1],
            [1,0,1],
            [1,1,3]
        ];
    }
}