<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM orders where id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Order Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>