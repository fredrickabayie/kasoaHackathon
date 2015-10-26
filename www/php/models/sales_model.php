<?php

    include_once 'adb.php';

    class sales_produce extends adb{
        
        //constructor
        function sales_produce(){}
        
        //add new product
        function add_sale( $prod, $price, $quantity){
            $str_query =  "INSERT into  sales_produce SET
                   produce = '$prod',
                   price = $price,
                   quantity = $quantity";
            
            return $this->query($str_query);
        }
        
        //update product quantity
        function update_quantity($prod, $quantity){
            $str_query = "UPDATE sales_produce SET
                    quantity  = $quantity
                    WHERE produce = '$prod'";
            
            return $this->query($str_query);
        }
        
        //search product
        function search_produce($search_text){
            $str_query = "SELECT * FROM sales_produce WHERE
                    produce LIKE '%$search_text%'";
            
            return $this->query($str_query);
        }
        
        
        //view products
        function view_sale(){
            $str_query = "SELECT * FROM sales_produce";
            
            return $this->query($str_query);
        }
        
        //delete product
        function delete_product($produce_type){
            $str_query = "DELETE FROM sales_produce WHERE produce = '$produce_type'";
            
            return $this->query($str_query);
        }
        
        function view_price($prod){
            $str_query = "SELECT * FROM sales_produce 
                        WHERE produce = '$prod'";
            
            return $this->query($str_query);
        }
         
    }

//
$obj = new sales_produce();
//if($obj->add_sale('yams', 67, 57)){
//    echo "worked";
//}
//else{ 
//    echo "did not"; 
//}
//if($obj->view_price('yams')){
//    $row = $obj->fetch();
//    echo $row['price'];
//}



?>