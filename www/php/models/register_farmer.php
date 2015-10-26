<?php

    require_once 'farmers.php';
    
    $obj = new farmers();


    $mesg = $_REQUEST['mesg'];

    $reg_details = explode(",", $message);
    if(sizeof($reg_details) == 4){
         $name = $reg_details[0];
        $location = $reg_details[1];
        $prod = $reg_details[2];
        $phone = $reg_details[3];
    }
    
    if($obj->add_farmer($name, $location, $prod, $phone)){
        header("Location: http://localhost/hackathon/kasoa_hackathon/kasoaHackathon/www/php/send_sms.php?cmd=1&phone={$phone}");
    }else{
        header("Location: http://localhost/hackathon/kasoa_hackathon/kasoaHackathon/www/php/send_sms.php?cmd=2&phone={$phone}");
    }



?>