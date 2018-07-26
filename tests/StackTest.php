<?php
/**
 * Created by PhpStorm.
 * User: 运营部
 * Date: 2018/7/26
 * Time: 12:58
 *
 *
 *                      _ooOoo_
 *                     o8888888o
 *                     88" . "88
 *                     (| ^_^ |)
 *                     O\  =  /O
 *                  ____/`---'\____
 *                .'  \\|     |//  `.
 *               /  \\|||  :  |||//  \
 *              /  _||||| -:- |||||-  \
 *              |   | \\\  -  /// |   |
 *              | \_|  ''\---/''  |   |
 *              \  .-\__  `-`  ___/-. /
 *            ___`. .'  /--.--\  `. . ___
 *          ."" '<  `.___\_<|>_/___.'  >'"".
 *        | | :  `- \`.;`\ _ /`;.`/ - ` : | |
 *        \  \ `-.   \_ __\ /__ _/   .-` /  /
 *  ========`-.____`-.___\_____/___.-`____.-'========
 *                       `=---='
 *  ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
 *           佛祖保佑       永无BUG     永不修改
 *
 */

class StackTest extends \PHPUnit\Framework\TestCase
{
    public function testEmpty()
    {
        $arr = [];
        $this->assertEmpty($arr);
        return $arr;
    }

    /**
     * @depends testEmpty
     * @param array $arr
     * @return array
     */
    public function testPush(array $arr)
    {
        array_push($arr, 'foo');
        $this->assertEquals('foo', $arr[count($arr)-1]);
        $this->assertNotEmpty($arr);
        return $arr;
    }

    /**
     * @depends testPush
     * @param array $stack
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }
}