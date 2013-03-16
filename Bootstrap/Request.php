<?php

namespace Bootstrap;

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
