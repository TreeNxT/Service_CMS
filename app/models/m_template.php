<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 2016-10-26
 * Time: 15:39
 */

class Template {

    private $data;

    function __construct()
    {
    }

    function load($url){
        include($url);
    }

    function setData($name, $val){
        $this->data[$name] = htmlentities($val, HTML_ENTITIES);
    }

    function getData($name){
        if(isset($this->data[$name])){
            return $this->data[$name];
        } else {
            return '';
        }
    }
}