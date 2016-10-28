<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 2016-10-26
 * Time: 15:37
 */
include("includes/database.php");
include("includes/init.php");

if(isset($_POST['submit'])){

    $Template->setData('input_user', $_POST['username']);
    $Template->setData('input_pass', $_POST['password']);

    if($_POST['username'] == '' || $_POST['password'] == ''){
        $Template->setAlert('Nie podano żadnych danych', 'error');
        $Template->load('views/v_login.php');
    } else if($Auth->validateLogin($Template->getData('input_user'), $Template->getData('input_pass')) == FALSE) {
        $Template->setAlert('Podano błędne dane logowania', 'error');
        $Template->load('views/v_login.php');
    } else {
        $_SESSION['username'] = $Template->getData('input_user');
        $_SESSION['logged'] = TRUE;
        $Template->setAlert('Witaj ' . $Template->getData('input_user'), 'success');
    }
} else {
    $Template->load('views/v_login.php');
}