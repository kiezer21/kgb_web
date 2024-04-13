<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM services where id='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"services Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>