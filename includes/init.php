<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 2016-10-26
 * Time: 15:38
 */

include ("models/m_template.php");
include ("models/m_auth.php");

$Template = new Template();
$Template->setAlertTypes(array('success', 'warning', 'error'));
$Auth = new Auth();

session_start();