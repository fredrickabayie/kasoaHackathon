<?php
    include_once 'adb.php';

    class sales extends adb{
        
        //constructor
        function sales(){}
        
        //add sales
        function add_sales($produce_id,
                          $quantity_purchased, $price, $buyer_id){
            $str_query = "INSERT INTO kasoa_sales SET
                produce_id = $produce_id,
                date_purchased = CURDATE(),
                time_purchased = CURTIME(),
                quantity = $quantity_purchased,
                buyer_id = $buyer_id,
                price = $price";
            
            return $this->query($str_query);
        }
        
        //view sales
        function view_sales(){
            $str_query = "SELECT * FROM kasoa_sales";
            
            return $this->query($str_query);
        }
        
        //view sales by date
        function view_sales_by_date($date){
            $str_query = "SELECT * FROM kasoa_sales
                WHERE date_purchased = $date";
            
            return $this->query($str_query);
        }
        
        //view sales by product
        function view_sales_by_product($product_id){
            $str_query = "SELECT P.date_purchased, 
                P.total_price,
                PP.produce_name, P.quantity FROM 
                kasoa_sales P, kasoa_produce PP
                WHERE PP.produce_id = $product_id 
                AND P.produce_id = $product_id";
            
            return $this->query($str_query);
        }
    }

$obj = new sales();
$obj->add_sales(2, 45, 78, 1);

?>