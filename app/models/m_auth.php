<?php
/**
 * Created by PhpStorm.
 * User: Dominik
 * Date: 2016-10-26
 * Time: 15:38
 */

class Auth{
    private $salt = 'admin';

    function __construct()
    {
    }

    function validateLogin($user, $pass){
        global $Database;

        if($stmt = $Database->prepare("SELECT * FROM users WHERE username = ? AND password = ?")) {
            $stmt->bind_param("ss", $user, md5($pass . $this->salt));
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
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
        if(isset($_SESSION['loggedin'])){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function logout(){
        session_destroy();
        session_start();
    }

}