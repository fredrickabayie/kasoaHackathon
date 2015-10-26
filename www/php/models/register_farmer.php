<?php

if(isset($_REQUEST['name']) && isset($_REQUEST['location'])
   && isset($_REQUEST['prod']) && isset($_REQUEST['phone'])){

    require_once 'farmers.php';
    
    $obj = new farmers();
    
    $name = $_REQUEST['name'];
    $location = $_REQUEST['location'];
    $prod = $_REQUEST['prod'];
    $phone = $_REQUEST['phone'];
    
    if($obj->add_farmer($name, $location, $prod, $phone)){
        header("Location: http://localhost/hackathon/kasoa_hackathon/kasoaHackathon/www/php/send_sms.php?cmd=1&phone={$phone}");
    }else{
        header("Location: http://localhost/hackathon/kasoa_hackathon/kasoaHackathon/www/php/send_sms.php?cmd=2&phone={$phone}");
    }
}


?>