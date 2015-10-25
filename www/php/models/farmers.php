<?php
include_once 'adb.php';

    class farmers extends adb{
       
        function farmers(){}
        
        //add new user
        function add_farmer($username, $password, $user_type){
            $str_query =  "INSERT into pos_users SET
                   username = '$username',
                   password = '$password',
                   user_type = '$user_type'";
            
            return $this->query($str_query);
        }
        
        
        //function edit user password details
        function edit_password($username, $password){
            $str_query = "UPDATE pos_users SET
                password = '$password'
                WHERE username = '$username'";
            
            return $this->query($str_query);
        }
        
    }

?>