<?php


use PHPUnit\Framework\TestCase;

/**
 * 用 @depends 标注来表达依赖关系
 * Class StackTest
 *
 * PHPUnit支持对测试方法之间的显式依赖关系进行声明。这种依赖关系并不是定义在测试方法的执行顺序中，而是允许生产者(producer)返回一个测试基境(fixture)的实例，并将此实例传递给依赖于它的消费者(consumer)们。
 *
 * 生产者(producer)，是能生成被测单元并将其作为返回值的测试方法。
 *
 * 消费者(consumer)，是依赖于一个或多个生产者及其返回值的测试方法。
 */
class StackTest extends TestCase
{
    /**
     * 用PHPUnit 测试数组
     */
    public function testPushAndPop()
    {
        $stack = array();
        $this->assertEquals(0, count($stack));
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack) - 1]);
        $this->assertEquals(1, count($stack));
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }

    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);
        return $stack;
    }

    /**
     * @depends testEmpty
     * 依赖于上面的测试结果
     * @param array $stack
     * @return array
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack) - 1]);
        $this->assertEquals(1, count($stack));
        return $stack;
    }

    /**
     * @depends testPush
     * @param array $stack
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }

}