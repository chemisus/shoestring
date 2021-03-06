<?php

namespace Shoestring;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-03-16 at 13:48:44.
 */
class BasicRouterTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var BasicRouter
     */
    protected $object;
    protected $route;
    protected $routes;
    protected $otherwise;
    protected $response;
    protected $request;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->response = $this->getMock('\\Bootstrap\\Response');

        $this->request = $this->getMock('\\Bootstrap\\Request');

        $this->route = $this->getMock('\\Bootstrap\\Route');

        $this->routes = [
            $this->route
        ];

        $this->otherwise = $this->getMock('\\Bootstrap\\Route');

        $this->object = new BasicRouter($this->routes, $this->otherwise);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers Shoestring\BasicRouter::route
     * @todo   Implement testRoute().
     */
    public function testRoute()
    {
        $this->route->expects($this->once())
            ->method('execute')
            ->will($this->returnValue($this->response));

        $this->otherwise->expects($this->any())
            ->method('execute')
            ->will($this->returnValue(null));

        $result = $this->object->route($this->request);

        $expect = $this->response;

        $this->assertEquals($expect, $result);
    }

    /**
     * @covers Shoestring\BasicRouter::route
     * @todo   Implement testRoute().
     */
    public function testRouteOtherwise()
    {
        $this->route->expects($this->once())
            ->method('execute')
            ->will($this->returnValue(false));

        $this->otherwise->expects($this->once())
            ->method('execute')
            ->will($this->returnValue($this->response));

        $result = $this->object->route($this->request);

        $expect = $this->response;

        $this->assertEquals($expect, $result);
    }

}
