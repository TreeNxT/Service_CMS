<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 2016-10-26
 * Time: 15:38
 */

define("SITE_PATH", 'http://localhost/Service_CMS/');
define("APP_PATH", str_replace("\\", "/", dirname(__FILE__) . "/"));
define("APP_RES", SITE_PATH . 'app/res/');
define("YEAR", date("Y"));
define("AUTHOR", 'Dominik Michalski');

$server =   'localhost';
$user   =   'root';
$pass   =   '';
$db_name =  'sv_cms';

require_once (APP_PATH."core/core.php");
$SV = new SV_Core($server, $user, $pass, $db_name);