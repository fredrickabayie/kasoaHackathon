<?php

    include_once 'adb.php';

    class produce extends adb{
        
        //constructor
        function produce(){}
        
        //add new product
        function add_produce( $prod_name, $prod_desc, $price, $quantity, $farmer, $quality, $unit){
            $str_query =  "INSERT into kasoa_produce SET
                   produce_name = '$prod_name',
                   produce_desc = '$prod_desc',
                   price = $price,
                   quantity = $quantity,
                   farmer_id = $farmer,
                   unit = '$unit',
                   quality_grade = '$quality'";
            
            return $this->query($str_query);
        }
        
        //update product information
        function update_produce($prod_id, $prod_name, $prod_desc, $prod_price, $quantity, $quality){
            $str_query = "UPDATE kasoa_produce SET
                    produce_name = '$prod_name',
                    produce_desc = '$prod_desc',
                    price = $price,
                    quantity = $quantity,
                    quality_grade = $quality
                    WHERE product_id = '$prod_id'";
            
            return $this->query($str_query);
       }
       
        //update product price
        function update_price($prod_id, $price){
            $str_query = "UPDATE kasoa_produce SET
                    price = $price
                    WHERE produce_id = $prod_id";
            
            return $this->query($str_query);
        }
        
        //update product quantity
        function update_quantity($prod_id, $quantity){
            $str_query = "UPDATE kasoa_produce SET
                    quantity  = $quantity
                    WHERE produce_id = $prod_id";
            
            return $this->query($str_query);
        }
        
        //search product
        function search_produce($search_text){
            $str_query = "SELECT * FROM kasoa_produce WHERE
                    produce_name LIKE '%$search_text%'";
            
            return $this->query($str_query);
        }
        
        
        //view products
        function view_produce(){
            $str_query = "SELECT * FROM kasoa_produce";
            
            return $this->query($str_query);
        }
        
        //delete product
        function delete_product($produce_id){
            $str_query = "DELETE FROM kasoa_produce WHERE produce_id = $produce_id";
            
            return $this->query($str_query);
        }
         
    }


//$obj = new produce();
//if($obj->view_produce()){
//    $row = $obj->fetch();
//    echo $row['produce_name'];
//}



?>