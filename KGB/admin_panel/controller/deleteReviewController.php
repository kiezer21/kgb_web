<?php

    include_once "../config/dbconnect.php";
    
    $review_id=$_POST['record'];
    $query="DELETE FROM review_table where review_id='$review_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Review Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>