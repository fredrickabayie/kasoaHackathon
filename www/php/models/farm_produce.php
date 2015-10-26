<?php

    include_once 'adb.php';

    class farm_produce extends adb{
        
        //constructor
        function farm_produce(){}
        
        //add new product
        function add_produce( $prod, $quantity, $phone){
            $str_query =  "INSERT into farm_produce SET
                   produce_type = '$prod',
                   phone = '$phone',
                   quantity = $quantity";
            
            return $this->query($str_query);
        }
        
        //update product quantity
        function update_quantity($prod, $quantity){
            $str_query = "UPDATE farm_produce SET
                    quantity  = $quantity
                    WHERE produce_type = '$prod'";
            
            return $this->query($str_query);
        }
        
        
        //search product
        function search_produce($search_text){
            $str_query = "SELECT * FROM farm_produce WHERE
                    produce_type LIKE '%$search_text%'";
            
            return $this->query($str_query);
        }
        
        
        //view products
        function view_produce(){
            $str_query = "SELECT * FROM farm_produce";
            
            return $this->query($str_query);
        }
        
        //delete product
        function delete_product($produce_type){
            $str_query = "DELETE FROM farm_produce WHERE produce_type = $produce_type";
            
            return $this->query($str_query);
        }
         
    }


// $obj = new farm_produce();
//if($obj->add_produce('yams', 67, '233200393945')){
//    echo "worked";
//}
//else{ 
//    echo "did not"; 
//}
// if($obj->view_produce()){
//     $row = $obj->fetch();
//     echo $row['produce_type'];
// }



?>