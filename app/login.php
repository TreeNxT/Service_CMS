<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 2016-10-26
 * Time: 15:37
 */

include("models/m_template.php");

$Template = new Template();
$Template->load("views/v_login.php");