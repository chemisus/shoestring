<?php

namespace Shoestring;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-03-16 at 12:44:41.
 */
class BasicRequestFactoryTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var BasicRequestFactory
     */
    protected $object;

    /**
     *
     * @var callable
     */
    private $body;

    /**
     *
     * @var string
     */
    private $method_key;

    /**
     *
     * @var string
     */
    private $path_key;

    /**
     *
     * @var string
     */
    private $protocol_key;

    /**
     *
     * @var array
     */
    private $server;

    /**
     *
     * @var array
     */
    private $get;

    /**
     *
     * @var array
     */
    private $post;

    /**
     *
     * @var array
     */
    private $files;

    /**
     *
     * @var array
     */
    private $session;

    /**
     *
     * @var array
     */
    private $env;

    /**
     *
     * @var array
     */
    private $cookie;

    /**
     *
     * @var array
     */
    private $headers;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->method_key     = 'method_key';
        $this->method_value   = 'method_value';
        $this->path_key       = 'path_key';
        $this->path_value     = 'path_value';
        $this->protocol_key   = 'protocol_key';
        $this->protocol_value = 'protocol_value';
        $this->body           = $body                 = 'body';
        $this->bodyCallback   = function () use($body) {
                return $body;
            };

        $this->server  = [
            $this->method_key   => $this->method_value,
            $this->path_key     => $this->path_value,
            $this->protocol_key => $this->protocol_value
        ];
        $this->get     = ['get'];
        $this->post    = ['post'];
        $this->files   = ['files'];
        $this->session = ['session'];
        $this->env     = ['env'];
        $this->cookie  = ['cookie'];
        $this->headers = ['headers'];

        $this->object = new BasicRequestFactory($this->bodyCallback,
            $this->method_key, $this->path_key, $this->protocol_key);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers Shoestring\BasicRequestFactory::createRequest
     * @todo   Implement testCreateRequest().
     */
    public function testCreateRequest()
    {
        $request = $this->object->createRequest($this->server, $this->get,
            $this->post, $this->files, $this->session, $this->env,
            $this->cookie, $this->headers);

        $result = $request;

        $expect = '\\Bootstrap\\Request';

        $this->assertInstanceOf($expect, $result);
    }

    /**
     * @covers Shoestring\BasicRequestFactory::createRequest
     * @todo   Implement testCreateRequest().
     */
    public function testCreateRequestMethod()
    {
        $request = $this->object->createRequest($this->server, $this->get,
            $this->post, $this->files, $this->session, $this->env,
            $this->cookie, $this->headers);

        $result = $request->method();

        $expect = $this->method_value;

        $this->assertEquals($expect, $result);
    }

    /**
     * @covers Shoestring\BasicRequestFactory::createRequest
     * @todo   Implement testCreateRequest().
     */
    public function testCreateRequestProtocol()
    {
        $request = $this->object->createRequest($this->server, $this->get,
            $this->post, $this->files, $this->session, $this->env,
            $this->cookie, $this->headers);

        $result = $request->protocol();

        $expect = $this->protocol_value;

        $this->assertEquals($expect, $result);
    }

    /**
     * @covers Shoestring\BasicRequestFactory::createRequest
     * @todo   Implement testCreateRequest().
     */
    public function testCreateRequestPath()
    {
        $request = $this->object->createRequest($this->server, $this->get,
            $this->post, $this->files, $this->session, $this->env,
            $this->cookie, $this->headers);

        $result = $request->path();

        $expect = $this->path_value;

        $this->assertEquals($expect, $result);
    }

    /**
     * @covers Shoestring\BasicRequestFactory::createRequest
     * @todo   Implement testCreateRequest().
     */
    public function testCreateRequestBody()
    {
        $request = $this->object->createRequest($this->server, $this->get,
            $this->post, $this->files, $this->session, $this->env,
            $this->cookie, $this->headers);

        $result = $request->body();

        $expect = $this->body;

        $this->assertEquals($expect, $result);
    }

    /**
     * @covers Shoestring\BasicRequestFactory::createRequest
     * @todo   Implement testCreateRequest().
     */
    public function testCreateRequestHeaders()
    {
        $request = $this->object->createRequest($this->server, $this->get,
            $this->post, $this->files, $this->session, $this->env,
            $this->cookie, $this->headers);

        $result = $request->headers();

        $expect = $this->headers;

        $this->assertEquals($expect, $result);
    }

    /**
     * @covers Shoestring\BasicRequestFactory::createRequest
     * @todo   Implement testCreateRequest().
     */
    public function testCreateRequestForm()
    {
        $request = $this->object->createRequest($this->server, $this->get,
            $this->post, $this->files, $this->session, $this->env,
            $this->cookie, $this->headers);

        $result = $request->form();

        $expect = $this->post;

        $this->assertEquals($expect, $result);
    }

    /**
     * @covers Shoestring\BasicRequestFactory::createRequest
     * @todo   Implement testCreateRequest().
     */
    public function testCreateRequestParameters()
    {
        $request = $this->object->createRequest($this->server, $this->get,
            $this->post, $this->files, $this->session, $this->env,
            $this->cookie, $this->headers);

        $result = $request->parameters();

        $expect = $this->get;

        $this->assertEquals($expect, $result);
    }

}
