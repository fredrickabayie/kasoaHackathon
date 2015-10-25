<?php

    include_once 'adb.php';

    class produce extends adb{
        
        //constructor
        function produce(){}
        
        //add new product
        function add_produce( $prod_name, $prod_desc, $price, $quantity, $farmer, $quality){
            $str_query =  "INSERT into kasoa_produce SET
                   produce_name = '$prod_name',
                   produce_desc = '$prod_desc',
                   price = $price,
                   quantity = $quantity,
                   farmer = $farmer,
                   quality_grade = $quality";
            
            return $this->query($str_query);
        }
        
        //update product information
        function update_produce($prod_id, $prod_name, $prod_desc, $prod_price, $quantity){
            $str_query = "UPDATE pos_products SET
                    produce_name = '$prod_name',
                   produce_desc = '$prod_desc',
                   price = $price,
                   quantity = $quantity,
                   farmer = $farmer,
                   quality_grade = $quality
                    WHERE product_id = '$prod_id'";
            
            return $this->query($str_query);
       }
       
        //update product price
        function update_price($prod_id, $price){
            $str_query = "UPDATE pos_products SET
                    unit_price  = $price
                    WHERE product_id = $prod_id";
            
            return $this->query($str_query);
        }
        
        //update product quantity
        function update_quantity($prod_id, $quantity){
            $str_query = "UPDATE pos_products SET
                    quantity  = $quantity
                    WHERE product_id = $prod_id";
            
            return $this->query($str_query);
        }
        
        function search_product($search_text){
            $str_query = "SELECT * FROM pos_products WHERE
                    product_name LIKE '%$search_text%'";
            
            return $this->query($str_query);
        }
        
        function view_products($){
            $str_query = "SELECT * FROM pos_products";
            
            return $this->query($str_query);
        }
        
        
        function delete_product($product_id){
            $str_query = "DELETE FROM pos_products WHERE product_id = $product_id";
            
            return $this->query($str_query);
        }
    }


?>