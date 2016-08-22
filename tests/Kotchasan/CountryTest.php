<?php

namespace Kotchasan;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-02-19 at 12:23:05.
 */
class CountryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Country
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Country;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * Generated from @assert ('TH') [==] 'ไทย'.
     *
     * @covers Kotchasan\Country::get
     */
    public function testGet()
    {
        $this->assertEquals(
            'ไทย', \Kotchasan\Country::get('TH')
        );
    }

    /**
     * @covers Kotchasan\Country::all
     * @todo   Implement testAll().
     */
    public function testAll()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
