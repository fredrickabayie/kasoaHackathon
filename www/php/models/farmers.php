<?php
include_once 'adb.php';

    class farmers extends adb{
       
        function farmers(){}
        
        //add new user
        function add_farmer($sname, $fname, $location, $prod_type, $cert_grade){
            $str_query =  "INSERT into kasoa_farmer SET
                   farmer_sname = '$sname',
                   farmer_fname = '$fname',
                   location = '$location',
                   produce_type = '$prod_type',
                   certification_grade = '$cert_grade'";
            
            return $this->query($str_query);
        }
        
        
        //function edit farmer details
        function edit_farmer($farmer_id, $sname, $fname, $location, $prod_type, $cert_grade){
            $str_query = "UPDATE kasoa_farmer SET
                   farmer_sname = '$sname',
                   farmer_fname = '$fname',
                   location = '$location',
                   produce_type = '$prod_type',
                   certification_grade = '$cert_grade'
                   WHERE farmer_id = $farmer_id";
            
            return $this->query($str_query);
        }
        
    }


$obj = new farmers();
if($obj->edit_farmer(1, 'Kwame', 'Mintah' , 'Aseibu Nkwanta', 'yams', 'A')){
    echo 'worked';
}else{
    echo 'did not work';
}


?>