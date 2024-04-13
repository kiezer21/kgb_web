<?php

    include_once "../config/dbconnect.php";
    
    $s_id=$_POST['record'];
    $query="DELETE FROM sorders where id='$s_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Service Avail Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>