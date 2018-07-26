<?php

use pf\test\Stringcheck;
use PHPUnit\Framework\TestCase;

require_once '../vendor/autoload.php';
/**
 * Created by PhpStorm.
 * User: 运营部
 * Date: 2018/7/26
 * Time: 12:46
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
class StringcheckTest extends TestCase
{
    public $abc;

    function setUp()
    {
        $this->abc = new Stringcheck("abc");
    }

    // called after the test functions are executed
    // this function is defined in PHPUnit_TestCase and overwritten
    // here
    function tearDown()
    {
        // delete your instance
        unset($this->abc);
    }

    // test the toString function
    function testToString()
    {
        $result = $this->abc->toString('contains %s');
        $expected = 'contains abc';
        $this->assertTrue($result == $expected);
    }

    // test the copy function
    function testCopy()
    {
        $abc2 = $this->abc->copy();
        $this->assertEquals($abc2, $this->abc);
    }

    // test the add function
    function testAdd()
    {
        $abc2 = new Stringcheck('123');
        $this->abc->add($abc2);
        $result = $this->abc->toString("%s");
        $expected = "abc123";
        $this->assertTrue($result == $expected);
    }

}