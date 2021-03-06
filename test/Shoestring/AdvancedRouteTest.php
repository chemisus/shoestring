<?php

namespace Shoestring;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-03-19 at 18:19:41.
 */
class AdvancedRouteTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var AdvancedRoute
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new AdvancedRoute(
            'GET', '', function () {
                
            }
        );
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    public static function translateProvider()
    {
        return [
            [
                '/a/',
                '/\/a\//',
            ],
            [
                '/a/[b]/c',
                '/\/a\/(b)?\/c/',
            ],
            [
                '/a/<b>/c',
                '/\/a\/(?P<b>.+?)\/c/',
            ],
            [
                '/a/[<b>]/c',
                '/\/a\/((?P<b>.+?))?\/c/',
            ],
            [
                '/a/[<b>/d]/c',
                '/\/a\/((?P<b>.+?)\/d)?\/c/',
            ],
            [
                '/a/[<b>/d]/<c>.<ext>',
                '/\/a\/((?P<b>.+?)\/d)?\/(?P<c>.+?)\.(?P<ext>.+?)/',
            ],
            [
                '/a/[<b>/d]/<c>[.<ext>]',
                '/\/a\/((?P<b>.+?)\/d)?\/(?P<c>.+?)(\.(?P<ext>.+?))?/',
            ],
            [
                '[/]a/b/<c>/<d>[<e>]f/g/[<h>][.<ext>]',
                '/(\/)?a\/b\/(?P<c>.+?)\/(?P<d>.+?)((?P<e>.+?))?f\/g\/((?P<h>.+?))?(\.(?P<ext>.+?))?/',
            ],
        ];
    }

    /**
     * @covers Shoestring\AdvancedRoute::translate
     * @dataProvider translateProvider
     */
    public function testTranslate($path, $pattern)
    {
        $expect = $pattern;

        $result = $this->object->translate($path);

        $this->assertEquals($expect, $result);
    }

}
