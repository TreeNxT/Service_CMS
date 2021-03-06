<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 2016-10-26
 * Time: 15:38
 */

class Auth{
    private $salt = 'h1F6b9xG';

    function __construct()
    {
    }

    function validateLogin($user, $pass){
        global $Database;

        if($stmt = $Database->prepare("SELECT * FROM users WHERE username = ? AND password = ?")) {
            $md5pass = md5($pass . $this->salt);
            $stmt->bind_param("ss", $user, $md5pass);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                //if ($stmt['admin'] == 1 )
                    //$_SESSION['admin'] = TRUE;
                $stmt->close();
                return TRUE;

            } else {
                $stmt->close();
                return FALSE;
            }
        } else{
            die();
        }


    }

    function checkLoginStatus(){
        if(isset($_SESSION['logged'])){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function checkRights(){
        if(isset($_SESSION['admin'])){
            if ($_SESSION['admin'] == TRUE){
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    function logout(){
        session_destroy();
        session_start();
    }

}