<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 2016-10-26
 * Time: 15:39
 */

class Template {

    function __construct()
    {
    }

    function load($url){
        include($url);
    }

}