<?php
if(filter_input (INPUT_GET, 'cmd')){
    $cmd = $cmd_sanitize = '';
    $cmd_sanitize = sanitize_string( filter_input (INPUT_GET, 'cmd'));
    $cmd = intval($cmd_sanitize);
                                    
    switch ($cmd){
        case 1:
            user_signup_control();
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
    
}

//add products to inventory
function add_product(){
    
}

//edit product prices
function edit_product_prices(){

}

//edit product quantities


//edit product details


//delete product

?>