<?php
if(filter_input (INPUT_GET, 'cmd')){
    $cmd = $cmd_sanitize = '';
    $cmd_sanitize = sanitize_string( filter_input (INPUT_GET, 'cmd'));
    $cmd = intval($cmd_sanitize);
                                    
    switch ($cmd){
        case 1:
            show_inventory();
            break;
        case 2:
        
            break;
        default:
            echo '{"result":0, "message":"Invalid Command Entered"}';
            break;
    }
}

//show inventory of goods
function show_inventory(){
    
    $obj = get_produce_model();

    if ($obj->view_produce()){
        echo '{"result":1, "produce":[';
        $row = $obj->fetch();
        while($row){
            echo json_encode($row);
            if( $row = $obj->fetch()){
                echo ',';
            }
        }
        echo ']}';
    }else{
        echo '{"result":0,"message": "query unsuccessful"}';
    }
        
}

//add products to inventory
//function add_product(){
//    
//    $obj  = $username = $password = $usertype = $row = '';
//    
//    if( filter_input (INPUT_GET, 'username') && filter_input(INPUT_GET, 'password') && filter_input(INPUT_GET, 'usertype')){
//    
//        $obj = get_user_model();
//        $username = sanitize_string(filter_input (INPUT_GET, 'username'));
//        $password = sanitize_string(filter_input (INPUT_GET, 'password'));
//        $password = encrypt($password);
//        $usertype = sanitize_string(filter_input (INPUT_GET, 'usertype'));
//        
//        if ($obj->add_user($username, $password, $usertype)){
//             if( strcmp($usertype, 'admin') == 0){
//                admin_signup($obj->get_insert_id());
//             }elseif( strcmp($usertype, 'teller') == 0){
//                 teller_signup($obj->get_insert_id());
//             }
//                
//        }else{
//            echo '{"result":0,"message": "signup unsuccessful"}';
//        }
//        
//    }
//}

//edit product prices
function edit_produce_prices(){

}

//edit product quantities


//edit product details


//delete product


//function to get teller model
function get_produce_model(){
    require_once '../models/produce.php';
    $obj = new produce();
    return $obj;
}

//sanitize command sent
function sanitize_string($val){
    $val = stripslashes($val);
    $val = strip_tags($val);
    $val = htmlentities($val);
    
    return $val;
}

?>