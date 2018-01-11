<?php

namespace tests;
use Calculate;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../vendor/autoload.php';



class CalculatorTest extends TestCase
{
    public function testSum()
    {
        $obj = new Calculate;
        $this->assertEquals(0, $obj->sum(0, 0));
    }

}