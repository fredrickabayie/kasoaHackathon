<?php
include_once 'adb.php';

    class buyer extends adb{
       
        function buyer(){}
        
        //add new user
        function add_buyer($sname, $fname, $email, $phone){
            $str_query =  "INSERT into kasoa_buyer SET
                   buyer_sname = '$sname',
                   buyer_fname = '$fname',
                   buyer_email = '$email',
                   buyer_phone = '$phone'";
            
            return $this->query($str_query);
        }
        
        
        //function edit farmer details
        function edit_buyer($buyer_id, $sname, $fname, $email, $phone){
            $str_query = "UPDATE kasoa_buyer SET
                   buyer_sname = '$sname',
                   buyer_fname = '$fname',
                   buyer_email = '$email',
                   buyer_phone = '$phone'
                   WHERE buyer_id = $buyer_id";
            
            return $this->query($str_query);
        }
        
    }


//$obj = new buyer();
//if($obj->edit_buyer(1, 'Kwame', 'Mintah' , 'kasi@gmail.com', '6767232223')){
//    echo 'worked';
//}else{
//    echo 'did not work';
//}


?>