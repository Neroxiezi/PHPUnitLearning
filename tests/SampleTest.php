<?php
/**
 * Created by PhpStorm.
 * User: 运营部
 * Date: 2018/7/27
 * Time: 11:06
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

class SampleTest extends \PHPUnit\Framework\TestCase
{
    public function setUp()
    {
        if (!extension_loaded('mysqli')) {
            $this->markTestSkipped('Mysqli扩展不可用');
        }
        //parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function testConnection()
    {
        // ...
    }

    /**
     * @requires PHP 5.3
     */
    public function testPhpVersion()
    {
    }
}