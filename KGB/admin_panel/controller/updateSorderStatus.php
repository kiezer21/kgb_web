<?php

    include_once "../config/dbconnect.php";
   
    $s_id=$_POST['record'];
    $sql = "SELECT order_status from sorders where id='$s_id'"; 
    $result=$conn-> query($sql);

    $row=$result-> fetch_assoc();
    
    
    if($row["order_status"]==0){
         $update = mysqli_query($conn,"UPDATE sorders SET order_status=1 where id='$s_id'");
    }
    else if($row["order_status"]==1){
         $update = mysqli_query($conn,"UPDATE sorders SET order_status=0 where id='$s_id'");
    }
?>