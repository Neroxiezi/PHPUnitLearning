<?php
/**
 * Created by PhpStorm.
 * User: 运营部
 * Date: 2018/7/26
 * Time: 15:21
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

class assertContains extends \PHPUnit\Framework\TestCase
{
    public function testFailure()
    {
        $this->assertContains(1, [1, 3, 4]);
    }

    public function testContains()
    {
        $this->assertContains('bar', 'bar');
    }

    public function testOK()
    {
        $this->assertContains('foo', 'FooBar', '', true);
    }

    public function testType()
    {
        $this->assertContainsOnly('string', ['1', '2', 3]);
    }
}