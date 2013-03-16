<?php

namespace Bootstrap;

/**
 * 
 * @author Terrence Howard <chemisus@gmail.com>
 * @since Version 0.1
 */
interface Request
{

    /**
     * 
     * @return string
     */
    function method();

    /**
     * 
     * @return string
     */
    function path();

    /**
     * 
     * @return string
     */
    function protocol();

    /**
     * 
     * @return array
     */
    function parameters();

    /**
     * 
     * @return array
     */
    function headers();

    /**
     * 
     * @return array
     */
    function form();

    /**
     * 
     * @return string
     */
    function body();
}
