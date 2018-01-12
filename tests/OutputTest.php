<?php

use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: 南丞
 * Date: 2018/1/12
 * Time: 11:59
 */
class OutputTest extends TestCase
{
    public function testExpectFooActualFoo()
    {
        $this->expectException('foo');
        print_r('foo');
    }

    public function testExpectBarActualBaz()
    {
        print_r('bar');
        $this->expectOutputString('bar');
    }
}