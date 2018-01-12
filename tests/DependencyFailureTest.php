<?php

use PHPUnit\Framework\TestCase;

/**
 * 利用测试之间的依赖关系
 * Class DependencyFailureTest
 *
 * 为了快速定位缺陷，我们希望把注意力集中于相关的失败测试上。
 *
 * 这就是为什么当某个测试所依赖的测试失败时，PHPUnit 会跳过这个测试。
 *
 * 通过利用测试之间的依赖关系，缺陷定位得到了改进。
 */
class DependencyFailureTest extends TestCase
{
    public function testOne()
    {
        $this->assertTrue(true);
    }

    /**
     * @depends testOne
     */
    public function testTwo()
    {

    }
}