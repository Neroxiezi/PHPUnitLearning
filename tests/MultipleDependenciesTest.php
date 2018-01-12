<?php

use PHPUnit\Framework\TestCase;

/**
 * 有多重依赖的测试
 */
class MultipleDependenciesTest extends TestCase
{
    public function testProducerFirst()
    {
        $this->assertTrue(true);
        return 'first1';
    }

    public function testProducerSecond()
    {
        $this->assertTrue(true);
        return 'second';
    }

    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     */
    public function testCustomer()
    {
        $this->assertEquals(['first','second'],func_get_args());
        $this->assertArraySubset(['first','second'],func_get_args());
    }
}