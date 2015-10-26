<?php
if(filter_input (INPUT_GET, 'cmd')){
    $cmd = $cmd_sanitize = '';
    $cmd_sanitize = sanitize_string( filter_input (INPUT_GET, 'cmd'));
    $cmd = intval($cmd_sanitize);
                                    
    switch ($cmd){
        case 1:
            show_farm_produce();
            break;
        case 2:
            add_produce();            
            break;
        default:
            echo '{"result":0, "message":"Invalid Command Entered"}';
            break;
    }
}

//show inventory of goods
function show_farm_produce(){
    $obj = get_farm_model();

    if ($obj->view_sale()){
        echo '{"result":1, "products":[';
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
function add_produce(){
        //add_sales($produce_id,$quantity_purchased, $price, $buyer_id);
    
//    if( filter_input (INPUT_GET, 'prod') && filter_input(INPUT_GET, 'qty') && filter_input(INPUT_GET, 'phone')){
    
        $obj = get_farm_model();
    
        
        $message = $_GET['mesg'];

        $prod_details = explode(",", $message);
        if(sizeof($prod_details) == 3){
            $prod = $prod_details[0];
            $quantity = $prod_details[1];
            $phone = $prod_details[2];
        }
        
        if ($obj->add_produce($prod, $quantity, $phone)){
             echo '{"result":1,"message": "information received"}';
                
        }else{
            echo '{"result":0,"message": "unsuccesful query"}';
        }
        
    
}

//edit product prices
function edit_product_prices(){

}

//edit product quantities


//edit product details


//delete product


//function to get teller model
function get_farm_model(){
    require_once '../models/farm_produce.php';
    $obj = new farm_produce();
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