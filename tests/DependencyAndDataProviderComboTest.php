<?php

use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: nancheng
 * Date: 18/1/13
 * Time: 下午3:46
 *
 * 如果测试同时从 @dataProvider 方法和一个或多个 @depends 测试接收数据，
 * 那么来自于数据供给器的参数将先于来自所依赖的测试的。
 * 来自于所依赖的测试的参数对于每个数据集都是一样的
 */
class DependencyAndDataProviderComboTest extends TestCase
{
    public function provider()
    {
        return [
            ['provider1']
        ];
    }

    public function testProducerFirst()
    {
        $this->assertTrue(true);
        return 'first';
    }

    public function testProducerSecond()
    {
        $this->assertTrue(true);
        return 'second';
    }


    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     * @dataProvider provider
     */
    public function testConsumer()
    {
        $this->assertEquals(
          ['provider2','first','second'],
          func_get_args()
        );
    }
}