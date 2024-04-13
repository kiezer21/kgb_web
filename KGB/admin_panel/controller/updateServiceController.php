<?php
    include_once "../config/dbconnect.php";

    $id=$_POST['id'];
    $service_name = $_POST['service_name'];
    $s_desc= $_POST['s_desc'];
    $s_price = $_POST['s_price'];
   
    $updateItem = mysqli_query($conn,"UPDATE services SET 
        service_name='$service_name', 
        s_desc='$s_desc',
        s_price=$s_price
        WHERE id=$id");


    if($updateItem)
    {
        echo "true";
    }
?>