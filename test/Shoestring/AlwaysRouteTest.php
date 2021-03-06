<?php

namespace Shoestring;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-03-16 at 12:09:07.
 */
class AlwaysRouteTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var AlwaysRoute
     */
    protected $object;

    /**
     * @var \Bootstrap\Request
     */
    protected $request;

    /**
     * @var callable
     */
    protected $callback;

    /**
     *
     * @var \Bootstrap\Response
     */
    protected $response;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->request = $this->getMock('\\Bootstrap\\Request');

        $this->response = $response = $this->getMock('\\Bootstrap\\Response');

        $this->callback = function () use ($response) {
                return $response;
            };

        $this->object = new AlwaysRoute($this->callback);

        $this->object->execute($this->request);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers Shoestring\AlwaysRoute::execute
     * @todo   Implement testExecute().
     */
    public function testExecute()
    {
        $result = $this->object->execute($this->request);

        $expect = $this->response;

        $this->assertEquals($expect, $result);
    }

}
