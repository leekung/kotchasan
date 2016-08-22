<?php

namespace Kotchasan;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-03-29 at 13:35:44.
 */
class RouterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Router
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Router();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * Generated from @assert ('/print.php/css/view/index', array()) [==] array( '_mvc' => 'view', '_dir' => 'index', 'module' => 'css').
     *
     * @covers Kotchasan\Router::parseRoutes
     */
    public function testParseRoutes()
    {
        $this->assertEquals(
            array('_mvc' => 'view', '_dir' => 'index', 'module' => 'css'), $this->object->parseRoutes('/print.php/css/view/index', array())
        );
    }

    /**
     * Generated from @assert ('/index/model/updateprofile.php', array()) [==] array( '_mvc' => 'model', '_dir' => 'updateprofile', 'module' => 'index').
     *
     * @covers Kotchasan\Router::parseRoutes
     */
    public function testParseRoutes2()
    {
        $this->assertEquals(
            array('_mvc' => 'model', '_dir' => 'updateprofile', 'module' => 'index'), $this->object->parseRoutes('/index/model/updateprofile.php', array())
        );
    }

    /**
     * Generated from @assert ('/index.php/alias/model/admin/settings/save') [==] array('module' => 'alias', '_mvc' => 'model', '_dir' => 'admin/settings', '_method' => 'save').
     *
     * @covers Kotchasan\Router::parseRoutes
     */
    public function testParseRoutes3()
    {
        $this->assertEquals(
            array('module' => 'alias', '_mvc' => 'model', '_dir' => 'admin/settings', '_method' => 'save'), $this->object->parseRoutes('/index.php/alias/model/admin/settings/save')
        );
    }

    /**
     * Generated from @assert ('/css/view/index.php', array()) [==] array('module' => 'css', '_mvc' => 'view', '_dir' => 'index').
     *
     * @covers Kotchasan\Router::parseRoutes
     */
    public function testParseRoutes4()
    {
        $this->assertEquals(
            array('module' => 'css', '_mvc' => 'view', '_dir' => 'index'), $this->object->parseRoutes('/css/view/index.php', array())
        );
    }

    /**
     * Generated from @assert ('/module/1/2.html', array()) [==] array('module' => 'module', 'cat' => 1, 'id' => 2).
     *
     * @covers Kotchasan\Router::parseRoutes
     */
    public function testParseRoutes5()
    {
        $this->assertEquals(
            array('module' => 'module', 'cat' => 1, 'id' => 2), $this->object->parseRoutes('/module/1/2.html', array())
        );
    }

    /**
     * Generated from @assert ('/module/1.html', array()) [==] array('module' => 'module', 'cat' => 1).
     *
     * @covers Kotchasan\Router::parseRoutes
     */
    public function testParseRoutes6()
    {
        $this->assertEquals(
            array('module' => 'module', 'cat' => 1), $this->object->parseRoutes('/module/1.html', array())
        );
    }

    /**
     * Generated from @assert ('/module/ทดสอบ.html', array()) [==] array('alias' => 'ทดสอบ', 'module' => 'module').
     *
     * @covers Kotchasan\Router::parseRoutes
     */
    public function testParseRoutes7()
    {
        $this->assertEquals(
            array('alias' => 'ทดสอบ', 'module' => 'module'), $this->object->parseRoutes('/module/ทดสอบ.html', array())
        );
    }

    /**
     * Generated from @assert ('/module.html', array()) [==] array('module' => 'module').
     *
     * @covers Kotchasan\Router::parseRoutes
     */
    public function testParseRoutes8()
    {
        $this->assertEquals(
            array('module' => 'module'), $this->object->parseRoutes('/module.html', array())
        );
    }

    /**
     * Generated from @assert ('/ทดสอบ.html', array()) [==] array('alias' => 'ทดสอบ').
     *
     * @covers Kotchasan\Router::parseRoutes
     */
    public function testParseRoutes9()
    {
        $this->assertEquals(
            array('alias' => 'ทดสอบ'), $this->object->parseRoutes('/ทดสอบ.html', array())
        );
    }

    /**
     * Generated from @assert ('/ทดสอบ.html', array('module' => 'test')) [==] array('alias' => 'ทดสอบ', 'module' => 'test').
     *
     * @covers Kotchasan\Router::parseRoutes
     */
    public function testParseRoutes10()
    {
        $this->assertEquals(
            array('alias' => 'ทดสอบ', 'module' => 'test'), $this->object->parseRoutes('/ทดสอบ.html', array('module' => 'test'))
        );
    }

    /**
     * Generated from @assert ('/docs/1/ทดสอบ.html', array('module' => 'test')) [==] array('alias' => 'ทดสอบ', 'module' => 'docs', 'cat' => 1).
     *
     * @covers Kotchasan\Router::parseRoutes
     */
    public function testParseRoutes11()
    {
        $this->assertEquals(
            array('alias' => 'ทดสอบ', 'module' => 'docs', 'cat' => 1), $this->object->parseRoutes('/docs/1/ทดสอบ.html', array('module' => 'test'))
        );
    }

    /**
     * Generated from @assert ('/docs/1/ทดสอบ.html', array()) [==] array('alias' => 'ทดสอบ', 'module' => 'docs', 'cat' => 1).
     *
     * @covers Kotchasan\Router::parseRoutes
     */
    public function testParseRoutes12()
    {
        $this->assertEquals(
            array('alias' => 'ทดสอบ', 'module' => 'docs', 'cat' => 1), $this->object->parseRoutes('/docs/1/ทดสอบ.html', array())
        );
    }

    /**
     * Generated from @assert ('/index.php', array('_action' => 'one')) [==] array('_action' => 'one').
     *
     * @covers Kotchasan\Router::parseRoutes
     */
    public function testParseRoutes13()
    {
        $this->assertEquals(
            array('_action' => 'one'), $this->object->parseRoutes('/index.php', array('_action' => 'one'))
        );
    }

    /**
     * Generated from @assert ('/admin_index.php', array('_action' => 'one')) [==] array('_action' => 'one', 'module' => 'admin_index').
     *
     * @covers Kotchasan\Router::parseRoutes
     */
    public function testParseRoutes14()
    {
        $this->assertEquals(
            array('_action' => 'one', 'module' => 'admin_index'), $this->object->parseRoutes('/admin_index.php', array('_action' => 'one'))
        );
    }

    /**
     * @covers Kotchasan\Router::init
     * @todo   Implement testInit().
     */
    public function testInit()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
