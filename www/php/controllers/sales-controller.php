<?php
if(filter_input (INPUT_GET, 'cmd')){
    $cmd = $cmd_sanitize = '';
    $cmd_sanitize = sanitize_string( filter_input (INPUT_GET, 'cmd'));
    $cmd = intval($cmd_sanitize);
                                    
    switch ($cmd){
        case 1:
            show_sales();
            break;
        case 2:
            add_sale();            
            break;
        default:
            echo '{"result":0, "message":"Invalid Command Entered"}';
            break;
    }
}

//show inventory of goods
function show_sales(){
    $obj = get_sales_model();

    if ($obj->view_sale()){
        echo '{"result":1, "inventory":[';
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
function add_sale(){
        //add_sales($produce_id,$quantity_purchased, $price, $buyer_id);
    
       $obj  = $prod =  $quantity = $price = '';
    
    if( filter_input (INPUT_GET, 'prod') && filter_input(INPUT_GET, 'qty') && filter_input(INPUT_GET, 'price')){
    
        $obj = get_sales_model();
        $prod = sanitize_string(filter_input (INPUT_GET, 'prod'));
        $quantity = sanitize_string(filter_input (INPUT_GET, 'qty'));
        $price = sanitize_string(filter_input (INPUT_GET, 'price'));
        
        if ($obj->add_sale($prod, $price, $quantity)){
             echo '{"result":1,"message": "sale successful"}';
                
        }else{
            echo '{"result":0,"message": "unsuccesful query"}';
        }
        
    }
}

function check_price(){
    
        $message = $_GET['mesg'];
        $phone = $_GET['phone']

        $prod_details = explode(",", $message);
        if(sizeof($prod_details) == 1){
            $prod = $prod_details[0];
        }
    
    
    
}

//edit product prices
function edit_product_prices(){

}

//edit product quantities


//edit product details


//delete product


//function to get teller model
function get_sales_model(){
    require_once '../models/sales_model.php';
    $obj = new sales_produce();
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