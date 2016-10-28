<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 2016-10-26
 * Time: 15:37
 */
include("includes/init.php");
$Auth->logout();
$Template->setAlert('Wylogowałeś się', 'success');
$Template->redirect('login.php');