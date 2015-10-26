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
            add_product();
            break;
        case 3:
            edit_produce_price();
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
function add_product(){
    
    $obj  = $prod_name = $prod_desc = $price = $quantity = $farmer = $quality = $unit = '';
    
    if( filter_input (INPUT_GET, 'pname') && filter_input(INPUT_GET, 'desc') && filter_input(INPUT_GET, 'price') && filter_input(INPUT_GET, 'quantity') && filter_input(INPUT_GET, 'fid') && filter_input(INPUT_GET, 'quality') && filter_input(INPUT_GET, 'unit')){
    
        $obj = get_produce_model();
        $prod_name = sanitize_string(filter_input (INPUT_GET, 'pname'));
        $prod_desc = sanitize_string(filter_input (INPUT_GET, 'desc'));
        $price = sanitize_string(filter_input (INPUT_GET, 'price'));
        $quantity = sanitize_string(filter_input (INPUT_GET, 'quantity'));
        $farmer = sanitize_string(filter_input (INPUT_GET, 'fid'));
        $quality = sanitize_string(filter_input (INPUT_GET, 'quality'));
        $unit = sanitize_string(filter_input (INPUT_GET, 'unit'));
        
        if ($obj->add_produce( $prod_name, $prod_desc, $price, $quantity, $farmer, $quality, $unit)){
             echo '{"result":1,"message": "produce added to inventory"}';
                
        }else{
            echo '{"result":0,"message": "unsuccesful query"}';
        }
        
    }
}

//edit product prices
function edit_produce_price(){
    
    $obj  = $prod_id = $price  = '';
    
    if( filter_input (INPUT_GET, 'pid') && filter_input(INPUT_GET, 'price')){
    
        $obj = get_produce_model();
        $prod_id = sanitize_string(filter_input (INPUT_GET, 'pid'));
        $price = sanitize_string(filter_input (INPUT_GET, 'price'));
        
        
        if ($obj->update_price( $prod_name, $prod_desc, $price, $quantity, $farmer, $quality, $unit)){
             echo '{"result":1,"message": "price set successfully"}';
                
        }else{
            echo '{"result":0,"message": "unsuccesful query"}';
        }
        
    }
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