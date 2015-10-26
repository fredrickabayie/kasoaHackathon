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

    if ($obj->view_sales()){
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
function add_sale(){
        //add_sales($produce_id,$quantity_purchased, $price, $buyer_id);
    
       $obj  = $prod_id = $quantity = $price = $buyer_id = '';
    
    if( filter_input (INPUT_GET, 'pid') && filter_input(INPUT_GET, 'quantity') && filter_input(INPUT_GET, 'price') && filter_input(INPUT_GET, 'bid')){
    
        $obj = get_sales_model();
        $prod_id = sanitize_string(filter_input (INPUT_GET, 'pid'));
        $prod_id = intval($prod_id);
        $quantity = sanitize_string(filter_input (INPUT_GET, 'quantity'));
        $quantity = intval($quantity);
        $price = sanitize_string(filter_input (INPUT_GET, 'price'));
        $buyer_id = sanitize_string(filter_input (INPUT_GET, 'buyer_id'));
        $buyer_id = intval($buyer_id);
        
        if ($obj->add_sales( $prod_id, $quantity, $price, $buyer_id)){
             echo '{"result":1,"message": "sale successful"}';
                
        }else{
            echo '{"result":0,"message": "unsuccesful query"}';
        }
        
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
    require_once '../models/sales.php';
    $obj = new sales();
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