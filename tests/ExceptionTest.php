<?php

use PHPUnit\Framework\TestCase;

/**
 * 对异常测试
 */
class ExceptionTest extends TestCase
{
    public function testExceptionFirst()
    {
        $this->expectException(InvalidArgumentException::class);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testExceptionSecond()
    {
    }
}