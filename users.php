<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 2016-10-26
 * Time: 15:37
 */

include ("includes/init.php");

if ($Auth->checkLoginStatus() == FALSE){
    $Template->setAlert('Musisz się zalogować, aby obejrzeć tą stronę.', 'error');
    $Template->redirect("login.php");
} else {
    $Template->load("views/v_users.php");
}