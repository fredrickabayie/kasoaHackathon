<?php
include_once 'adb.php';

    class farmers extends adb{
       
        function farmers(){}
        
        //add new user
        function add_farmer($name, $location, $prod_type, $phone){
            $str_query =  "INSERT into kasoa_farmer SET
                   name = '$name',
                   location = '$location',
                   produce_type = '$prod_type',
                   phone = '$phone'";
            
            return $this->query($str_query);
        }
        
        
        //function edit farmer details
        function edit_farmer($name, $location, $prod_type, $phone){
            $str_query = "UPDATE kasoa_farmer SET
                   name = '$name',
                   location = '$location',
                   produce_type = '$prod_type',
                   WHERE phone = '$phone'";
            
            return $this->query($str_query);
        }
        
    }


$obj = new farmers();
if($obj->add_farmer('Kwasi Amofa', 'Ada','Plantain', '233200393945' )){
   echo 'worked';
}else{
   echo 'did not work';
}


?>