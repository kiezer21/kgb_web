<?php

    include_once "../config/dbconnect.php";
    
    $c_id=$_POST['record'];
    $query="DELETE FROM customer where c_id='$c_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Customer Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>