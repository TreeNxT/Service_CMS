<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 2016-10-26
 * Time: 15:39
 */

class Template {

    private $data;
    private $alertsTypes;

    function __construct()
    {
    }

    function load($url){
        include($url);
    }
    function redirect($url){
        header("Location: $url");
    }

    function setAlertTypes($types){
        $this->setAlertTypes = $types;
    }

    function setAlert($value, $type = null){
        if ($type == ''){
            $this->alertsTypes[0];
        }
        $_SESSION[$type][] = $value;
    }

    function getAlerts(){
        $data = '';

        foreach ($this->setAlertTypes as $alert) {
            if (isset($_SESSION[$alert])) {
                foreach ($_SESSION[$alert] as $value) {
                    $data .= '<li class="' . $alert . '">' . $value . '</li>';
                }
                unset($_SESSION[$alert]);
            }
        }

        return $data;
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